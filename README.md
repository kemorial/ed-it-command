# vdnh

Этот проект - тестовое задания для ed-it.

## Описание

Нужно было сделать сидер интервалов и команду, которая выводит интервалы, входящие в заданный диапазон, в виде таблицы в консоль.

## Установка

1. Клонируйте репозиторий:
    ```bash
    git clone https://github.com/kemorial/ed-it-command.git
    ```

2. Перейдите в каталог проекта:
    ```bash
    cd ed-it-command
    ```

3. Установите все необходимые зависимости:
    ```bash
    cd docker-ed-it/  \
    && docker composer up -d \ 
    && cd ../ \
    && cp .env.example .env \
    && docker exec php-ed-it bash -c \
    "php artisan migrate\
    && artisan db:seed --class=IntervalSeeder"
    ```
## Использование

Простой пример использования проекта:

войти в контейнер при помощи команды:
### docker -it exec php-ed-it bash
и ввести следующие кодманды

 - php artisan intervals:list --start=-2000 --end=2000
 - php artisan intervals:list --start=-2000 --end=null
 - php artisan intervals:list --start=-2000
