## About System

Biodiversiti Repositori Flora is a system designed to store data related to the flora found in Malaysia and also serves as a search engine for that flora data in the Malay language. This system has been built with Laravel PHP 8 and utilizes the Algolia Full Text Search API as the search engine. Algolia is employed to handle spelling errors and remove stopwords to provide relevant search results to users. There are 2 types of users which are Admin and Public people. The admin can login to create, update, read adn delete the record while the public people only can use the search engine and view the details.


## Installation

1. After pull the code from git, open terminal and run "composer update" to install all the dependencies
2. Then run "cp .env.example .env" 
3. In .env file, edit DB_DATABASE= to your local database name
4. Run "php artisan key:generate" to generate laravel application key
5. Open mysql phpmyadmin, create database. Make sure the name is same with you have declare in .env. Then, import the sql file from sql folder (biodiversiti-repositori-flora\sql).
6. After done import, run "php artisan serve"
7. You can access the local system by using link http://127.0.0.1:8000

## Use the system
1. If you want to CRUD data, login as admin:
- email: admin#gmail.com
- pw: admin123

2. If you want to test the search query, can try or any other than this also can:
"Tumbuhan yang boleh merawat sakit sendi"


