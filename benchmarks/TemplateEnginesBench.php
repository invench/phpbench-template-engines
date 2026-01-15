<?php

require __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TemplateWrapper;
use Latte\Engine as LatteEngine;

/**
 * @BeforeClassMethods({"resetCache"})
 * @BeforeMethods({"setUp"})
 * @Revs(120000)
 * @Iterations(5)
 * @Warmup(1)
 */
class TemplateEnginesBench
{
    private const CACHE_DIR = __DIR__ . '/../cache';
    private const TEMPLATES_DIR = __DIR__ . '/../templates';

    private Smarty $smarty;
    private $smartyTemplate;
    private LatteEngine $latte;
    private Environment $twig;
    private TemplateWrapper $twigTemplate;
    private string $latteTemplate;
    private array $data;

    public static function resetCache(): void
    {
        $cache_dir = self::CACHE_DIR;

        if ( is_dir($cache_dir) )
        {
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($cache_dir, FilesystemIterator::SKIP_DOTS),
                RecursiveIteratorIterator::CHILD_FIRST
            );

            foreach ( $iterator as $item )
            {
                if ( $item->isDir() )
                    rmdir($item->getPathname());
                else
                    unlink($item->getPathname());
            }

            rmdir($cache_dir);
        }

        if ( !is_dir($cache_dir) )
            mkdir($cache_dir, 0777, true);
    }

    public function setUp(): void
    {
        $this->data = [
            'data' => [
                'do', 'not', 'ignore', 'performance', 'as', 'cpu',
                'compute', 'power', 'keeps', 'growing',
            ],
        ];

        $this->smarty = new Smarty();
        $this->smarty->escape_html = true;
        $this->smarty->compile_check = false;
        $this->smarty->setCacheDir(self::CACHE_DIR . '/smarty');
        $this->smarty->setCompileDir(self::CACHE_DIR . '/smarty');
        $this->smarty->setTemplateDir(self::TEMPLATES_DIR);
        $this->smartyTemplate = $this->smarty->createTemplate('index.html.smarty');

        $loader = new FilesystemLoader(self::TEMPLATES_DIR);
        $this->twig = new Environment($loader, [
            'cache' => self::CACHE_DIR . '/twig',
            'auto_reload' => false,
        ]);
        $this->twigTemplate = $this->twig->load('index.html.twig');

        $latte_cache_dir = self::CACHE_DIR . '/latte';
        if ( !is_dir($latte_cache_dir) )
            mkdir($latte_cache_dir, 0777, true);
        $this->latte = new LatteEngine();
        $this->latte->setStrictParsing();
        $this->latte->setTempDirectory($latte_cache_dir);
        $this->latte->setAutoRefresh(false);
        $this->latteTemplate = self::TEMPLATES_DIR . '/index.latte';

        $this->smarty->assign($this->data);
        $this->smarty->fetch('index.html.smarty');
        $this->smartyTemplate->assign($this->data);
        $this->smartyTemplate->fetch();
        $this->twig->load('index.html.twig')->render($this->data);
        $this->twigTemplate->render($this->data);
        $this->latte->renderToString($this->latteTemplate, $this->data);
    }

    public function benchSmarty(): void
    {
        $this->smarty->assign($this->data);
        $this->smarty->fetch('index.html.smarty');
    }

    public function benchSmartyReuse(): void
    {
        $this->smartyTemplate->assign($this->data);
        $this->smartyTemplate->fetch();
    }

    public function benchTwig(): void
    {
        $this->twig->load('index.html.twig')->render($this->data);
    }

    public function benchTwigReuse(): void
    {
        $this->twigTemplate->render($this->data);
    }

    public function benchLatte(): void
    {
        $this->latte->renderToString($this->latteTemplate, $this->data);
    }
}
