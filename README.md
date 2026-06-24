# Riverside Commons

A Drupal 10/11 arts centre website built as an assessment project.

## Requirements

- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [DDEV](https://ddev.readthedocs.io/en/stable/)

## Local Setup

### 1. Clone the repository

```bash
git clone https://github.com/rohit-mns/riverside-commons.git
cd riverside-commons
```

### 2. Start DDEV

```bash
ddev start
```

### 3. Install dependencies

```bash
ddev composer install
```

### 4. Import database

```bash
ddev import-db --file=db.sql.gz
```

### 5. Import configuration

```bash
ddev drush cim -y
```

### 6. Clear cache

```bash
ddev drush cr
```

### 7. Open site

```bash
ddev launch
```

## Theme

Custom theme located at `web/themes/custom/riverside`

## Features

- Programs listing page with category filter pills
- Dynamic program count
- Program detail pages with sidebar
- Related programs block
- Responsive layout
