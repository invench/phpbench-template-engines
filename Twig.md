# Twig version-to-version benchmark

## 3.28.0 to 3.27.1

PHPBench (1.7.0) PHP version 8.5.8, xdebug ✔, opcache ✔

**3.28.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.650mb   | 16.968μs | ±1.37% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.650mb   | 15.379μs | ±4.13% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.650mb   | 16.129μs | ±1.34% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.650mb   | 14.071μs | ±1.05% |

**3.27.1**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.654mb   | 17.366μs | ±2.03% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.654mb   | 15.582μs | ±1.47% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.654mb   | 15.928μs | ±1.04% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.654mb   | 14.474μs | ±1.67% |

## 3.27.1 to 3.27.0

PHPBench (1.7.0) PHP version 8.5.7, xdebug ✔, opcache ✔

**3.27.1**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.654mb   | 17.089μs | ±1.61% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.654mb   | 15.566μs | ±1.37% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.654mb   | 15.710μs | ±1.24% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.654mb   | 13.970μs | ±2.50% |

PHPBench (1.6.1) PHP version 8.5.7, xdebug ✔, opcache ✔

**3.27.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.654mb   | 17.589μs | ±1.77% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.654mb   | 16.904μs | ±3.45% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.654mb   | 15.694μs | ±2.22% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.654mb   | 14.744μs | ±3.12% |

## 3.27.0 to 3.26.0

PHPBench (1.6.1) PHP version 8.5.6, xdebug ✔, opcache ✔

**3.27.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.653mb   | 16.744μs | ±2.84% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.653mb   | 15.862μs | ±1.42% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.653mb   | 15.817μs | ±3.34% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.653mb   | 13.815μs | ±1.20% |

**3.26.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.653mb   | 17.010μs | ±3.10% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.653mb   | 15.536μs | ±1.49% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.653mb   | 15.343μs | ±1.65% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.654mb   | 13.697μs | ±1.93% |

## 3.26.0 to 3.25.0

PHPBench (1.6.1) PHP version 8.5.6, xdebug ❌, opcache ✔

**3.26.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.653mb   | 17.194μs | ±1.19% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.653mb   | 15.783μs | ±1.47% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.653mb   | 15.495μs | ±1.81% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.654mb   | 13.751μs | ±1.19% |

**3.25.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.641mb   | 17.443μs | ±5.27% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.641mb   | 15.530μs | ±1.07% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.641mb   | 15.954μs | ±1.97% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.641mb   | 13.844μs | ±0.18% |

## 3.25.0 to 3.24.0

PHPBench (1.6.1) PHP version 8.4.21, xdebug ✔, opcache ✔

**3.25.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.568mb   | 16.216μs | ±0.98% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.568mb   | 14.587μs | ±1.52% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.568mb   | 15.304μs | ±2.41% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.568mb   | 13.580μs | ±1.97% |

**3.24.0**

| benchmark            | subject             | revs   | its | mem_peak  | mode     | rstdev |
|----------------------|---------------------|--------|-----|-----------|----------|--------|
| TemplateEnginesBench | benchTwig           | 120000 | 5   | 1.568mb   | 16.542μs | ±0.86% |
| TemplateEnginesBench | benchTwigReuse      | 120000 | 5   | 1.568mb   | 14.715μs | ±1.24% |
| TemplateEnginesBench | benchTwigYield      | 120000 | 5   | 1.568mb   | 15.721μs | ±2.57% |
| TemplateEnginesBench | benchTwigYieldReuse | 120000 | 5   | 1.568mb   | 13.614μs | ±2.30% |

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
