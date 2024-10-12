## Laravel Test Task

Tasks Details:
1. Make API of Register User
2. Make API of Use Login and in Response Token
3. Make API of Products Authenticated with token if without token access then give error message

Project Setup on local environment

1. Go to the project root directory
2. Install composer dependancies using command "composer install"
3. Set the application key using command "php artisan key:generate"
4. Set the database environment variable.
5. Run the database Migrations "php artisan migrate"
6. Passport Install "php artisan passport:install"
7. Run the seeder to import demo product data using "php artisan db:seed"
8. Serve the Application using artisan command "php artisan serve"


Use below API's Curl to  Register, Login and get Products list:

1. Register API
   Curl: curl --location 'http://127.0.0.1:8000/api/register' \
--header 'Accept: application/json' \
--form 'name="Harpreet Singh"' \
--form 'email="heyharpreetsingh@gmail.com"' \
--form 'password="Password\!23"'

2. Login API
   Curl: curl --location 'http://127.0.0.1:8000/api/login' \
--header 'Accept: application/json' \
--form 'email="heyharpreetsingh@gmail.com"' \
--form 'password="Password\!23"'

3. Get Products:
   Curl: curl --location --request GET 'http://127.0.0.1:8000/api/products' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZmYxM2EyY2RhMWZhOGIzZmEzZDVkNmZkNTE4Nzc0ZDVmYzA3NzBmYWQyOGIzM2ZiZDQ3OGIxMGNmODllYWI1ZWYxODk3MmRiZDM1ODY3NzYiLCJpYXQiOjE3Mjg3MTYyNTMuODUzNjE5LCJuYmYiOjE3Mjg3MTYyNTMuODUzNjIyLCJleHAiOjE3NjAyNTIyNTMuODQ2NjIyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Kcy2L8Dn80EBa8xjPJP4JYFgF-z0xSQgx5UhYHZ-aBLJLJSxcxR-6ynf4iAMy6eTzmhXvdiaZMEupPiV9OoPoNS-yDs-T8UclH-MIhgNL7T6ac0IP4kR2bKazTBWo_l3PjA-A9ptkk3BLZnvNYQPuORT6ZRgsuMPe2siXblHWDxlTgHTWlyYPYieFtTA66c_A2uS7Qp8_ETs2ySjVRuiThv7gCxGD8mTxBuwk2VbSWXpOJawsVwWKqE4A9LEZlBMidOClvrln9oQ-jsVYPoBNmorlSpzkzSrNtK9wuOgMR0qZDbs_p6MugICIOWZiqbLhtvFLuaer8S-qthigesk17vQAdSnhp4pNfUOzufEgwZ45pzn6fARGXiUMRYmFpYmuSRR0HtDrsdYU5_ER-eANmCMAKi8w7z8o7kvMzrfB5HOUQRdNIlVxzH1t0dotuUFc9IIChrnxTFqFap65vSp6dQw2uvvP9HSoBqlTe8nExKmK2VGe-lS_tYoy85UQhutE_RgYH8vOhq3kdQ-40zI1yPcLUrHloSXNr-pTw-eQ3VkVdYcF5_zuECtq3ADmqMhiHHcEhzegLG87ELiR6S8hjIziQAQw6uDQIbC7xWavx9-sFyx6BaRiEUvj3QSKo77o3dVMNTEy-ZnXhlYfPikIyaFmRmojvWEB4xgskQy7So' \
--form 'email="heyharpreetsingh@gmail.com"' \
--form 'password="Password\!23"'

