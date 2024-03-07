## University Assignment: Login System

This project implements a basic login system using PHP and MySQL for a university assignment. It allows users to log in with their credentials and redirects them to a dashboard upon successful authentication.

![1](https://github.com/barlakshan/Login/assets/106991265/286d4e03-6fbb-4ad0-b98c-2c3b33fea7f0)

![2](https://github.com/barlakshan/Login/assets/106991265/c2776b56-eb6b-4858-84be-90ea05f0c139)

![3](https://github.com/barlakshan/Login/assets/106991265/bd415632-efde-4f03-81ed-3e7e6adec638)

## Files and Structure

index.html: HTML login form for users to enter their credentials.
check_login.php: PHP script to validate user credentials and redirect accordingly.
config.php: PHP script to establish a connection to the MySQL database.
login_db.sql: SQL file containing the database schema and sample user data.
style.css: CSS file for styling the login form.

## Usage
Import the login_db.sql file into your MySQL database to create the necessary tables and sample user data.
Update the database connection details in the config.php file if necessary.
Place all files (index.html, check_login.php, config.php, login_db.sql, style.css) in the same directory on your web server.
Access the index.html file through a web browser to use the login system.

## Database Schema
The users table contains the following columns:

username: VARCHAR(50) - User's username.
password: VARCHAR(50) - User's password (stored in plaintext for demonstration purposes).

## Technologies Used
PHP
MySQL
HTML
CSS
