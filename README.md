<p align="center">
    <h1 align="center">Инструкция по запуску</h1>
    <br>
</p>

УСТАНОВКА
------------

### Установка через Composer и Git

Шаг 1. Перейдите через консоль в папку с доменами OpenServer

~~~
cd domains
~~~

Шаг 2. Вернитесь в командную строку и в папке проекта вызовите команду клонирования

~~~
git clone https://github.com/wwaavvyy/yii2-semester6th.git
~~~

Шаг 3. Откройте composer, перейдите в папку проекта

~~~
cd domains/yii2-semester6th-main
~~~

Шаг 4. Напишите в composer

~~~
composer install
~~~

НАСТРОЙКА
-------------

### База данных

Отредактируйте файл `config/db.php` действительными данными, например:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=wwaavvyy',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
];
```

### Миграции

Шаг 1. В окне composer, предварительно войдя в директорию с проектом напишите:

~~~
yii migrate
~~~

Шаг 1. Затем напишите

~~~
yes
~~~

### Дамп базы данных

Я оставил дамп базы данных, на всякий случай.

Шаг 1. Запустите phpMyAdmin

Шаг 2. Выберите вкладку "Импорт"

Шаг 3. Нажмите кнопку "Обзор"

Шаг 4. Выберите базу данных (она лежит в корневой папке проекта)

Шаг 5. Нажмите кнопку "Вперед"


<p align="center">
    <h1 align="center">Вы великолепны!</h1>
    <br>
</p>