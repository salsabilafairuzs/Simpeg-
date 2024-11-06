## Project Description

This application is designed to manage employee data using the Laravel framework. It will provide an intuitive interface and the necessary functionalities to perform basic operations on employee data, including searching, filtering, and managing employee records. By utilizing Laravel and various modern UI components, this application is expected to meet the needs of efficient and effective employee data management.

## Key Feature

- View and search the desired data list
- Sort and filter the data based on the desired column
- Add data to employee data
- Implementation of datepicker, select2, datatable, fileinputjs
- Using jquery validator
- Provides a seeder for dummy data

## Dependency

1. PHP 8.2
2. Laravel 11
3. MySQL
4. Bootstrap 5

## Resource

https://select2.org/
https://datatables.net/
https://cdnjs.com/libraries/datepicker

## Installation

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure your database
4. Run `php artisan key:generate`
5. Run `php artisan migrate --seed`
6. Run `npm install && npm run dev`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
