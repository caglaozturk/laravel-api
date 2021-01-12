# Laravel OAuth 2.0 RestFUL API

Dökümandan takip edebilirsiniz: http://localhost:8000/api/documentation

# Gereksinimler

1. PHP versiyon en az 7.3    
2. Laravel versiyon  8  

# Kurulum
```sh
$ composer install
$ php artisan migrate
$ php artisan db:seed
```
  - composer install komutuyla bağımlılıkları yükleyin.
  - .env.example dosyasını .env olarak değiştirin ve veritabanı bilgilerinizi güncelleyin

# Giriş
>     
> email : admin@admin.com
> pass :  12345678
> 

# Ekran Görüntüleri:
>'headers' => [
>    'Accept' => 'application/json',
>    'Authorization' => 'Bearer '. $access_token,
>]

| Method | Endpoints | Request |
| ------ | ------ | ------ |
| POST - User Register | http://localhost:8000/api/register | name, email, password |
| POST - User Login | http://localhost:8000/api/login | email, password |
| POST - Address Create | http://localhost:8000/api/address | detail |
| GET -  User List | http://localhost:8000/api/users | ---- |
| GET -  Address List | http://localhost:8000/api/address | ---- |
| GET - Show Single Address | http://localhost:8000/api/address/{id} | ---- |
| PUT - Address Update | http://localhost:8000/api/address/{id} | detail |
| DELETE - Address Delete | http://localhost:8000/api/address/{id} | ---- |
