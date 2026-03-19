# Twig version-to-version benchmark

## 3.24.0 to 3.23.0

PHPBench (1.5.1) PHP version 8.4.18, xdebug ✔, opcache ✔

**3.24.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.568mb   | 15.973μs | ±3.72% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.568mb   | 14.271μs | ±0.79% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.568mb   | 14.867μs | ±2.33% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.568mb   | 13.212μs | ±0.91% |

**3.23.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.568mb   | 16.289μs | ±3.91% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.568mb   | 14.783μs | ±2.55% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.568mb   | 14.985μs | ±1.05% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.568mb   | 13.166μs | ±3.38% |

## 3.23.0 to 3.22.2

There is no performance improvement or regression.

PHPBench (1.4.3) PHP version 8.4.17, xdebug ✔, opcache ✔

**3.23.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.568mb   | 16.109μs | ±1.11% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.568mb   | 14.671μs | ±2.66% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.568mb   | 14.934μs | ±2.40% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.568mb   | 13.113μs | ±2.17% |

**3.22.2**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.562mb   | 16.053μs | ±0.78% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.562mb   | 14.691μs | ±1.47% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.562mb   | 14.918μs | ±1.08% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.562mb   | 13.493μs | ±3.12% |
