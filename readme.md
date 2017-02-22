## About Passport

https://laravel.com/docs/5.4/passport , Laravel already makes it easy to perform authentication via traditional login forms, but what about APIs? APIs typically use tokens to authenticate users and do not maintain session state between requests. Laravel makes API authentication a breeze using Laravel Passport, which provides a full OAuth2 server implementation for your Laravel application in a matter of minutes. Passport is built on top of the League OAuth2 server that is maintained by Alex Bilbie.

## Installation

1. `composer install`
2. `php artisan migrate`
3. `php artisan passport:install`
4. *optional `php artisan vendor:publish --tag=passport-components`


## Testing
copy value `client_id` & `client_secret` from table `oauth_clients`.
For example my `client_id`:`2` & `client_secret`:`CVV1uzAsO72C9Rd1rKXmKWHk7T14tSLRfiVNiZRR`

```
curl -X POST -H "Content-Type: application/x-www-form-urlencoded" -H "X-Requested-With: XMLHttpRequest" -H "Cache-Control: no-cache" -H "Postman-Token: bdc1d3d1-46f4-cc8b-39e3-5fd02ed7383f" -d 'grant_type=password&client_id=2&client_secret=CVV1uzAsO72C9Rd1rKXmKWHk7T14tSLRfiVNiZRR&redirect_uri=http://localhost&username=harry@gmail.com&password=secret&scope=check-status place-orders' "http://localhost:8000/oauth/token"
```