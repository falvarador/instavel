Instavel App
A basic clone for Instagram made with Laravel and MongoDB.

## Installation
1. Clone the repository
2. Install dependencies with `composer install`
3. Create a .env file with the following content:
```
APP_NAME=Laravel    
APP_ENV=local    
APP_KEY=base64:Wr7RLFGRHRQc45AOUl/ovzFD/7ZrUhma2aibaQ4iULk=    
APP_DEBUG=true    
APP_URL=http://localhost:8000    
APP_PORT=8000    
    
APP_LOCALE=en    
APP_FALLBACK_LOCALE=en    
APP_FAKER_LOCALE=en_US    
    
APP_MAINTENANCE_DRIVER=file    
# APP_MAINTENANCE_STORE=database    
    
PHP_CLI_SERVER_WORKERS=4    
    
BCRYPT_ROUNDS=12    
    
LOG_CHANNEL=stack    
LOG_STACK=single    
LOG_DEPRECATIONS_CHANNEL=null    
LOG_LEVEL=debug    
    
DB_CONNECTION=sqlite    
# DB_HOST=127.0.0.1    
# DB_PORT=3306    
# DB_DATABASE=laravel    
# DB_USERNAME=root    
# DB_PASSWORD=    
    
SESSION_DRIVER=database    
SESSION_LIFETIME=120    
SESSION_ENCRYPT=false    
SESSION_PATH=/    
SESSION_DOMAIN=null    
    
BROADCAST_CONNECTION=log    
FILESYSTEM_DISK=local    
QUEUE_CONNECTION=database    
    
CACHE_STORE=database    
# CACHE_PREFIX=    
    
MEMCACHED_HOST=127.0.0.1    
    
REDIS_CLIENT=phpredis    
REDIS_HOST=127.0.0.1    
REDIS_PASSWORD=null    
REDIS_PORT=6379    
    
MAIL_MAILER=log    
MAIL_SCHEME=null    
MAIL_HOST=127.0.0.1    
MAIL_PORT=2525    
MAIL_USERNAME=null    
MAIL_PASSWORD=null    
MAIL_FROM_ADDRESS="hello@example.com"    
MAIL_FROM_NAME="${APP_NAME}"    
    
AWS_ACCESS_KEY_ID=    
AWS_SECRET_ACCESS_KEY=    
AWS_DEFAULT_REGION=us-east-1    
AWS_BUCKET=    
AWS_USE_PATH_STYLE_ENDPOINT=false    
    
VITE_APP_NAME="${APP_NAME}"    
```
4. Run the app with `composer run dev`

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)