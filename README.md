# MultiCalculator

Free online calculator suite for financial and business calculations.

**Live Site:** [multicalculator.itechy.xyz](https://multicalculator.itechy.xyz)

## Available Calculators

- **Discount Calculator** - Calculate percentage off, double/triple discounts, BOGO deals
- **Markup Calculator** - Calculate retail markup, profit margin, and selling price
- **Overtime Calculator** - Calculate overtime pay including time and a half
- **Pay Raise Calculator** - Calculate salary increase and new earnings
- **Monthly Income Calculator** - Convert hourly/daily/weekly/yearly to monthly income
- **CAGR Calculator** - Calculate compound annual growth rate for investments
- **Commission Calculator** - Calculate sales commission from any rate
- **Average Calculator** - Calculate arithmetic mean of numbers

## Tech Stack

- PHP 8.1+
- Laravel 10
- Bootstrap 4
- Vite

## Setup

```bash
# Install dependencies
composer install
npm install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Build assets
npm run build

# Start development server
php artisan serve
```

## License

MIT
