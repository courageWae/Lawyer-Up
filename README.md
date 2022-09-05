# Lawyer Up

Lawyer Up is a web application that helps users to get timely access to all types of lawyers from the comfort of their homes with no paper and document hustle.

It allows hourly, minute, and daily booking of lawyers.
A client gets a personalized dashboard to manage a purchased package, booked appointments, and profile. 
A Lawyer gets a personalized dashboard to manage appointments with clients and profiles.

The Admin Always gets a dashboard to monitor all activities in the application.

## Tech Stack:

* Php
* Javascript
* Laravel
* Mysql
* Material Icon
* Html
* Css

## Installation

Lawyer Up was built with the Laravel framework, so it follows a typical Laravel project installation. However, for the sake of elaboration, the below indicates how to install this project on your computer.


### Step ONE

```bash
# You need to install git on your computer
git clone --branch master https://github.com/courageWae/Lawyer-Up.git
```
### Step TWO

```bash
cd Lawyer-Up

# You need to have composer installed on your computer
composer install --ignore-platform-reqs
```
### Step THREE

```bash
php artisan key:generate
```
### Step FOUR

```bash
php artisan migrate --seed
php artisan 
```

## Usage
To be able to approve booked appointments , you will need to logged in as an Administrator. the application comes with a dummy addministration with credentials below.
* Email : admin@admin.com
* Password : 1234567890

A Client (User) creates a login account with some credentials : 
* Name
* User Name (Unique - There can only be one user name in the application)
* Email Address (Unique - There can only be one email address in the application)
* Phone Number
* Insurer (A drop-down listing of all partnered insurance companies)
* Password
* Confirm Password

***
After registration, the client can purchase a plan or package with a generated invoice for reference.
The client has access to book any lawyer of choice depending on the purchased plan or package.
The plans are of various monetary weights and duration. The duration may include monthly and yearly.

The client may book a lawyer based on the availability of the lawyer. The lawyer indicates his/her availability on the public profile.

### CONCLUSION
This application is not entirely tested, it was developed out of leisure and boredom. There may be bugs lurking all over.

Have fun.
