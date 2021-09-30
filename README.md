# docker-laravel

最強laravel環境
https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4

～下記実行してね～
- `docker compose exec app bash`
- `composer install`
- `envファイルをenv.exampleより複製`
- `php artisan key:generate`
- `php artisan storage:link`
- `chmod -R 777 storage bootstrap/cache`
- `php artisan migrate`
