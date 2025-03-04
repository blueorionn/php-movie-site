# PHP MOVIEDB SITE

This is a fun project created for learning and experimenting with Php and MYSQL. The goal is to build a simple movie and book database where users can add, search, and view details about their favorite movies and books.

## Features

- Add movies and books to the database

- Search for titles by name or genre

- View details including author, director, release date, etc.

- Uses MYSQL for data storage

## Usage

1. Download and Install composer

    ```bash
        php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
        php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"
        php composer-setup.php
        php -r "unlink('composer-setup.php');"
    ```

2. Put composer.phar into a directory on your PATH
    
    ```bash
        sudo mv composer.phar /usr/local/bin/composer
    ```

3. Install/Enable PDO MySQL Extension

    ```bash
        sudo apt install php-mysql
    ```

4. Set Variables for Database

    ```bash
        export DB_HOST="db-host-name"
        export DB_PORT=3306
        export DB_NAME='moviedb'
        export DB_USER='username'
        export DB_PASS='your-password'
    ```

## Disclaimer

This project is for educational purposes only. It is not intended for any commercial use. The codebase contains many security vulnerabilities, including but not limited to:

- SQL Injection (user input is not sanitized)

- Cross-Site Scripting (XSS) (no proper escaping)

- Prototype Pollution (unsafe handling of object properties)

Use this project at your own risk. Do not deploy it in a production environment.

## License

This project is released under the MIT License. Feel free to modify and experiment with it!