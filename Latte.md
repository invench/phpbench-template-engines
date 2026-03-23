# Latte version-to-version benchmark

You can change the current latte version via composer, for example: `composer require latte/latte:3.0.x`.

## 3.1.3 to 3.1.2

PHPBench (1.6.1) PHP version 8.4.18, xdebug ✔, opcache ✔

**3.1.3**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchLatte          | 120000 | 5   | 590.954mb | 37.178μs | ±3.07% |

**3.1.2**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchLatte          | 120000 | 5   | 590.954mb | 37.564μs | ±2.24% |

## 3.1.2 to 3.1.1

PHPBench (1.5.1) PHP version 8.4.18, xdebug ✔, opcache ✔

**3.1.2**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchLatte          | 120000 | 5   | 590.954mb | 37.703μs | ±3.46% |

**3.1.1**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchLatte          | 120000 | 5   | 590.952mb | 37.482μs | ±1.09% |

## 3.1.1 to 3.1.0

PHPBench (1.4.3) PHP version 8.4.17, xdebug ✔, opcache ✔

**3.1.1**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchLatte          | 120000 | 5   | 590.952mb | 37.843μs | ±3.23% |

**3.1.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchLatte          | 120000 | 5   | 590.952mb | 37.882μs | ±1.60% |

## 3.1.0 to 3.0.25

PHPBench (1.4.3) PHP version 8.4.17, xdebug ✔, opcache ✔

**3.1.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchLatte          | 120000 | 5   | 590.952mb | 37.882μs | ±1.60% |

**3.0.25**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchLatte          | 120000 | 5   | 501.909mb | 37.949μs | ±1.78% |
