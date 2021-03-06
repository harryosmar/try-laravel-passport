## About Passport

https://laravel.com/docs/5.4/passport , Laravel already makes it easy to perform authentication via traditional login forms, but what about APIs? APIs typically use tokens to authenticate users and do not maintain session state between requests. Laravel makes API authentication a breeze using Laravel Passport, which provides a full OAuth2 server implementation for your Laravel application in a matter of minutes. Passport is built on top of the League OAuth2 server that is maintained by Alex Bilbie.

## Installation

1. `composer install`
2. `php artisan migrate`
3. `php artisan passport:install`
4. *optional `php artisan vendor:publish --tag=passport-components`
5. `php artisan serve`


## Testing
copy value `client_id` & `client_secret` from table `oauth_clients`.
For example my `client_id`:`2` & `client_secret`:`CVV1uzAsO72C9Rd1rKXmKWHk7T14tSLRfiVNiZRR`

```
curl -X POST -H "Content-Type: application/x-www-form-urlencoded" -H "X-Requested-With: XMLHttpRequest" -H "Cache-Control: no-cache" -H "Postman-Token: bdc1d3d1-46f4-cc8b-39e3-5fd02ed7383f" -d 'grant_type=password&client_id=2&client_secret=CVV1uzAsO72C9Rd1rKXmKWHk7T14tSLRfiVNiZRR&redirect_uri=http://localhost&username=harry@gmail.com&password=secret&scope=check-status place-orders' "http://localhost:8000/oauth/token"
```

#### Response Sample
```json
{
    "token_type": "Bearer",
    "expires_in": 1295995,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjE3MjBmOTEzZjk3NDdiZTE1NjU3YzgwYTU1NDc4MzVjNzczYmIzMDVjNWVlOWQxZmI2ZWY5MjJhNzg1YTE4OWI2N2E3YmYxMzA0OTcxNjUwIn0.eyJhdWQiOiIyIiwianRpIjoiMTcyMGY5MTNmOTc0N2JlMTU2NTdjODBhNTU0NzgzNWM3NzNiYjMwNWM1ZWU5ZDFmYjZlZjkyMmE3ODVhMTg5YjY3YTdiZjEzMDQ5NzE2NTAiLCJpYXQiOjE0ODc3NTc3MjAsIm5iZiI6MTQ4Nzc1NzcyMCwiZXhwIjoxNDg5MDUzNzE1LCJzdWIiOiIxIiwic2NvcGVzIjpbImNoZWNrLXN0YXR1cyIsInBsYWNlLW9yZGVycyJdfQ.KzD9eAHXeMqisbxw8n1EsRVHTBz0TfK486xxcAhd7jzObY2KuuvX9zVDX97k8tUHhwqRFvvr0-7_O_P3tYbuR1wKkGG3m4VFQ3HM4Zox9v6Yb5P90SHJVSQQg7ZKRikf6HgUYvRS32D8tPpISSCdccIqefyK5Z7326mO3G82y8svpRswIrgVtDUO0hLfB0-e--c7yTiQMaQIuOqRuyMH1EhwE1_pXsEReIbKVNTSs_HfK7sujNktEyq7GBTnL_20oHHbbRvQjtDAJkcztJUU3yQGripA5pGA8uhiJQpsGNxlCQN0rlmLWJuuYb9CJuVjTRhNvA9j200WgmnpABNoDZiBT0-mPWGl4PAMN2Q2tiV8X1Spl1QCC0mEcP5ulmV0zIk_o62MxZcqPmHEA6mhDIUxDWYTk8yP8Mv3eiWJJ5vZ5yu3qSjMPAkGg7CVKrmgd2WarkgeWT9OJ5CoE1RuDRHwfWqxa-wH9JwrBsAKJB5vIX25y8_wfp9u4ALXo-NPJOCm7xDE21q1lNBil7Bx_32q9I64rNtgmYLcm6z3TYsTUtS3UsVV6ZxCNRSMW8mTBDXWTC8-6ExP_MO3sOYa5KxzKnbf8GZXnESf8OrPW4_v8gPp9fOQHi3vVt3l6aiI4ddVLjTbCVV0GTJfjYfmC_OZ_MklnAmeN1Ojk-8OVcI",
    "refresh_token": "L0DWDiQ+kb2bRIIKD8JiHzCpUrdjzjlJPSuLFfZy2blQrWSHysuyw9vguyyH73zRJ+ikmjMwIcu3kENAjvMc6Uv45bS0LGcEAaYrSElYgh9ng/VfyiLys9iB9K/x7kE9ReUpkJ6j2VysEaW54UGmZ4SHo4N+J6G/wtIheRkYCRvBqr358Rban6ZHrPx5Gdb7szNsLugmjtU7z8UJVyj6z3mhdQ++wjQ//46X7wZb4qeJpoznTFTgaoS3WbzBq+s23WSvyXRfrQd+VaAAXnUv6n2kAGn4GiBQ/YSA6U+VELuaq2Rr++qp0LGsO/Gjc5/jqPH1BeiBH2A25HSp0jHwwqlVtq4FpGQjhUhBAc+XqQ28pTyH3CeEu1E94RbJx4j5LDbvWlQ0xfJOvQU+wA8UtpnZNxHrklFWb5YilH986D7s6UvZWV/EdOsjbmo6ubysEQvDJebJ1p6FZIT5gmmfSIyB/2Ha4pIBGmsb7DU4XMIJNdaaNnSTrY0bzJsmtZchEo6HjiUxRd/dsIa4E06Es4EB/ohov11SL4l6D386jjN+BScBB6h7QJEQ4x8ywff8eY2CyKO+IEVbCzTUOy8Fr27wRRprC+rQAJCUUtZP/p8S9cD+Sz5aCw3bWEUC6tfFajmFsJSZpj0LJTc3hmo7fko7arBLrPIIR7eKN7XUl4Y="
}
```

#### Then Hit the api endpoint 
GET `localhost:8000/api/user/`
with headers 
```
Content-Type:application/x-www-form-urlencoded
X-Requested-With:XMLHttpRequest
Authorization:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjE3MjBmOTEzZjk3NDdiZTE1NjU3YzgwYTU1NDc4MzVjNzczYmIzMDVjNWVlOWQxZmI2ZWY5MjJhNzg1YTE4OWI2N2E3YmYxMzA0OTcxNjUwIn0.eyJhdWQiOiIyIiwianRpIjoiMTcyMGY5MTNmOTc0N2JlMTU2NTdjODBhNTU0NzgzNWM3NzNiYjMwNWM1ZWU5ZDFmYjZlZjkyMmE3ODVhMTg5YjY3YTdiZjEzMDQ5NzE2NTAiLCJpYXQiOjE0ODc3NTc3MjAsIm5iZiI6MTQ4Nzc1NzcyMCwiZXhwIjoxNDg5MDUzNzE1LCJzdWIiOiIxIiwic2NvcGVzIjpbImNoZWNrLXN0YXR1cyIsInBsYWNlLW9yZGVycyJdfQ.KzD9eAHXeMqisbxw8n1EsRVHTBz0TfK486xxcAhd7jzObY2KuuvX9zVDX97k8tUHhwqRFvvr0-7_O_P3tYbuR1wKkGG3m4VFQ3HM4Zox9v6Yb5P90SHJVSQQg7ZKRikf6HgUYvRS32D8tPpISSCdccIqefyK5Z7326mO3G82y8svpRswIrgVtDUO0hLfB0-e--c7yTiQMaQIuOqRuyMH1EhwE1_pXsEReIbKVNTSs_HfK7sujNktEyq7GBTnL_20oHHbbRvQjtDAJkcztJUU3yQGripA5pGA8uhiJQpsGNxlCQN0rlmLWJuuYb9CJuVjTRhNvA9j200WgmnpABNoDZiBT0-mPWGl4PAMN2Q2tiV8X1Spl1QCC0mEcP5ulmV0zIk_o62MxZcqPmHEA6mhDIUxDWYTk8yP8Mv3eiWJJ5vZ5yu3qSjMPAkGg7CVKrmgd2WarkgeWT9OJ5CoE1RuDRHwfWqxa-wH9JwrBsAKJB5vIX25y8_wfp9u4ALXo-NPJOCm7xDE21q1lNBil7Bx_32q9I64rNtgmYLcm6z3TYsTUtS3UsVV6ZxCNRSMW8mTBDXWTC8-6ExP_MO3sOYa5KxzKnbf8GZXnESf8OrPW4_v8gPp9fOQHi3vVt3l6aiI4ddVLjTbCVV0GTJfjYfmC_OZ_MklnAmeN1Ojk-8OVcI
```
note the `Authorization`:`Bearer {{access_token}}`

##### Success Response
```json
[
    {
        "id": 1,
        "name": "",
        "email": "harry@gmail.com",
        "created_at": null,
        "updated_at": null
    }
]
```

##### Error Response
Cause by wrong access_token
```json
{
    "error": "Unauthenticated."
}
```

