# Smarty, Twig, and Latte benchmark

This benchmark runs all engines under equal conditions with auto-escaping enabled. Disabling auto-escape hides the cost of a feature you should keep on to reduce XSS risk.

Tested with PHP 8.4.16 (xdebug ✔, opcache ✔).

## Templates

The test templates are pretty simple:

* Extending one base template and overriding its blocks
* 3 blocks, with varying default content
* A single for loop, outputting elements of an array within one block

## Running Yourself

- `composer install`
- `vendor/bin/phpbench run`

## Results

Results depend on your machine. Use the phpbench report output for comparisons (for example, `--report=aggregate`).

### Comparison benchmark of Smarty 5.7.0, Twig 3.23.0, and Latte 3.1.1.

Smarty 5.x and Twig 3.9 introduced performance regressions and higher memory usage.

My results (Intel(R) Xeon(R) CPU E5-2682 v4 @ 2.50GHz / 64 GB DDR4) on Ubuntu 24.04 are below:

| benchmark            | subject             | set | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|-----|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         |     | 120000 | 5   | 3.829mb   | 21.218μs | ±5.42% |
| TemplateEnginesBench | benchSmartyReuse    |     | 120000 | 5   | 1.568mb   | 19.567μs | ±4.22% |
| TemplateEnginesBench | benchTwig           |     | 120000 | 5   | 1.568mb   | 16.109μs | ±1.11% |
| TemplateEnginesBench | benchTwigReuse      |     | 120000 | 5   | 1.568mb   | 14.671μs | ±2.66% |
| TemplateEnginesBench | benchTwigYield      |     | 120000 | 5   | 1.568mb   | 14.934μs | ±2.40% |
| TemplateEnginesBench | benchTwigYieldReuse |     | 120000 | 5   | 1.568mb   | 13.113μs | ±2.17% |
| TemplateEnginesBench | benchLatte          |     | 120000 | 5   | 590.952mb | 37.843μs | ±3.23% |

Twig version-to-version benchmark is [here](Twig.md).

Latte version-to-version benchmark is [here](Latte.md).

### Comparison benchmark of Smarty 4.5.6, Twig 3.8.0, and Latte 3.1.1.

Use the 'preregression' branch to test it:

```bash
git checkout preregression
composer install
vendor/bin/phpbench run
```

My results (Intel(R) Xeon(R) CPU E5-2682 v4 @ 2.50GHz / 64 GB DDR4) on Ubuntu 24.04 are below:

| benchmark            | subject          | set | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|------------------|-----|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty      |     | 120000 | 5   | 2.871mb   | 16.332μs | ±3.60% |
| TemplateEnginesBench | benchSmartyReuse |     | 120000 | 5   | 1.223mb   | 15.271μs | ±4.84% |
| TemplateEnginesBench | benchTwig        |     | 120000 | 5   | 1.223mb   | 11.373μs | ±1.57% |
| TemplateEnginesBench | benchTwigReuse   |     | 120000 | 5   | 1.223mb   | 10.037μs | ±2.73% |
| TemplateEnginesBench | benchLatte       |     | 120000 | 5   | 590.815mb | 37.759μs | ±3.22% |

## References

- [dominics/smarty-twig-benchmark](https://github.com/dominics/smarty-twig-benchmark)
