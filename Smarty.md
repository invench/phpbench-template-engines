# Smarty version-to-version benchmark

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
