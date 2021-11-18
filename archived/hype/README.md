# Hype Lumenified

Create a new file in the `hype` directory `.env`

```
APP_NAME=Lumen
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
APP_TIMEZONE=UTC

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=sqlite

CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

1. `cd hype`
2. `composer install`
3. `php -S localhost:8000 -t public`

## Custom Themes

Each month or year is capable of having a custom theme. If a custom theme isn't present for that month or month/year combo, the default theme will be loaded. A request can force the default theme to load by appending `?default_theme=true` to the uri.

### Structure

* All custom html pages must live in the `resources/views/theme` directory
    * Custom year templates live in `resources/views/theme/year/$year`
    * Custom year/month templates live in `resources/views/theme/year_month/$year/$month`
* Each custom template will load via an `index.php` file
    * This file will receive a list of resources `App\Resource` objects, the month, and the year as arguments
    * Any supporting theme markup files should live in this directory
* Each cutstom theme's assets must live in `public/theme/`
    * Custom year assets live in `public/theme/year/$year`
    * Custom year/month templates live in `public/theme/year_month/$year/$month`
    * Once in their correct folders, assets can be arranged to the theme's desires

## Adding New Data

> this can be done locally and pushed to the github repo

* `cd hype`
* Run `php artisan make:migration april_2019`
    * This will create a file in `hype/database/migrations` called `2019_05_07_015212_april_2019.php` (everything before `april_2019` is automatically generated based on the date and time the command was run)
* Open that file and use this general structure to add records for the month

```php
    public function up()
    {
        DB::table('month_year')->insert(
            [
                'month' => 4,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
            ->where('month', 4)->first();

        $reports = [
            [
                'username' => 'Some username',
                'description' => "What the user is hype about",
                'description2' => "There could be more",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            ...
        ];

        foreach($reports as $entry){
            DB::table('report')->insert($entry);
        }
    }
    ...
```

* Run the migration
    * `php artisan migrate`
* Commit the files and push to github
* Pull on the remote sever
