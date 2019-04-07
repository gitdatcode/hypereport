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
