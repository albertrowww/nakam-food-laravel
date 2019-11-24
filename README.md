# Project NakamFood

Laravel WebApp untuk memesan makanan daring

### Requirements

- Laravel 6
- Composer
- Artisan

### Instalasi

Fork repository ini dan clone hasil forknya.

Setelah itu, duplikasi file .env.example menjadi .env dan atur database
```
  APP_NAME=NakamFood
  ...
  DB_USERNAME=root
  DB_PASSWORD=
```

Lalu jalankan perintah,

```sh

$ composer update
$ php artisan key:generate
$ php artisan config:cache
$ php artisan ser

```

**JANGAN LUPA UNTUK MENGATUR TOKEN GITHUB** <br>
GUIDE: *www.previousnext.com.au/blog/managing-composer-github-access-personal-access-tokens*

**TIPS merge Upstream ke repo hasil Fork**
*help.github.com/en/github/collaborating-with-issues-and-pull-requests/merging-an-upstream-repository-into-your-fork*
