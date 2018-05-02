<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Manage all sessions using Laravel

Here I have show you that we can mange the sessions of particular users of multipal devices.

- **You can delete sessions from multipal devices of logged-in user.**
- **[Using Laravel Sesstion](https://laravel.com/docs/5.4/session)**
- **You can use this thing laravel 5.4 and greater version.**

---

##### Installation

**_Step : 1_**

```
git clone https://github.com/sagarankoliya/laravel-sessions.git
```

**_Step : 2_**

Go to project directory using **Terminal / CMD**

```
composer install
```
If you don`t have composer then install
[Composer Download Link](https://getcomposer.org/)

**_Step : 3_**

In project directory find **_.env.example_** and rename to **_.env_**

Generate laravel application key

```
php artisan key:generate
```

Also change **DB_DATABASE, DB_USERNAME, DB_PASSWORD** in .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

**_Step : 4_**

Run Migration

```
php artisan migrate
```

**_Step : 5_**

Run Project

```
php artisan serve
```

Visit URL : http://127.0.0.1:8000

And Create User and same user login multipal brower or system

**Now you can manage sessions**

### Thats it.

Feel free to contact me if you have any query. (^_^)
