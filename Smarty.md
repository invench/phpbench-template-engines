# Smarty version-to-version benchmark

## 5.8.4 to 5.8.2

PHPBench (1.7.0) PHP version 8.5.8, xdebug ✔, opcache ✔

**5.8.4**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         | 120000 | 5   | 3.964mb   | 22.439μs | ±2.74% |
| TemplateEnginesBench | benchSmartyReuse    | 120000 | 5   | 1.650mb   | 20.340μs | ±3.04% |

**5.8.2**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         | 120000 | 5   | 3.958mb   | 22.903μs | ±4.60% |
| TemplateEnginesBench | benchSmartyReuse    | 120000 | 5   | 1.654mb   | 21.069μs | ±1.76% |

## 5.8.2 to 5.8.1

PHPBench (1.7.0) PHP version 8.5.7, xdebug ✔, opcache ✔

**5.8.2**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         | 120000 | 5   | 3.958mb   | 23.545μs | ±1.34% |
| TemplateEnginesBench | benchSmartyReuse    | 120000 | 5   | 1.654mb   | 20.837μs | ±3.26% |

**5.8.1**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         | 120000 | 5   | 3.958mb   | 23.326μs | ±1.98% |
| TemplateEnginesBench | benchSmartyReuse    | 120000 | 5   | 1.654mb   | 20.764μs | ±2.53% |

## 5.8.1 to 5.8.0

PHPBench (1.7.0) PHP version 8.5.7, xdebug ✔, opcache ✔

**5.8.1**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         | 120000 | 5   | 3.958mb   | 23.326μs | ±1.98% |
| TemplateEnginesBench | benchSmartyReuse    | 120000 | 5   | 1.654mb   | 20.764μs | ±2.53% |

PHPBench (1.6.1) PHP version 8.5.7, xdebug ✔, opcache ✔

**5.8.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         | 120000 | 5   | 3.958mb   | 22.455μs | ±3.80% |
| TemplateEnginesBench | benchSmartyReuse    | 120000 | 5   | 1.654mb   | 21.702μs | ±1.97% |

## 5.8.0 to 5.7.0

There is no performance improvement or regression.

PHPBench (1.4.3) PHP version 8.4.18, xdebug ✔, opcache ✔

**5.8.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         | 120000 | 5   | 3.880mb   | 21.603μs | ±3.00% |
| TemplateEnginesBench | benchSmartyReuse    | 120000 | 5   | 1.568mb   | 19.567μs | ±4.30% |

PHPBench (1.4.3) PHP version 8.4.17, xdebug ✔, opcache ✔

**5.7.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchSmarty         | 120000 | 5   | 3.829mb   | 21.218μs | ±5.42% |
| TemplateEnginesBench | benchSmartyReuse    | 120000 | 5   | 1.568mb   | 19.567μs | ±4.22% |
