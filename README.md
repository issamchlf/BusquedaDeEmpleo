
# Job Helper
A simple web app built with Laravel to help job seekers track and manage their job applications in a way of control and orginize.

## App Description
This app allows you to control your daily job requests and orginize them in a way that help you to understand your requests including the Company name, status and Details.


## Screenshots
Job helper Dashboard
![Captura de pantalla 2024-12-10 235900](https://github.com/user-attachments/assets/096ab3d9-13b7-4d11-8096-4055fd66c03a)
Job Helper Details
![Captura de pantalla 2024-12-10 235917](https://github.com/user-attachments/assets/d1e702ed-20ea-44ef-9aa5-5a3fb9b44499)



## Prerequisites

Before running this project, make sure you have the following installed:

- [PHP](https://www.php.net/downloads.php) (Recommended version: 8.x)
- [Composer](https://getcomposer.org/download/)
- [Laravel](https://laravel.com/docs/9.x) (latest stable version)
- [MySQL](https://dev.mysql.com/downloads/)
- [Node.js](https://nodejs.org/en/) (Optional, for front-end assets)

## Installation Instructions

1. **Clone the repository:**

   ```bash
   git clone https://github.com/issamchlf/BusquedaDeEmpleo.git

## Install Composer dependencies
2. **composer:**

   ```bash
   composer install

3. **npm**

   ```bash
   npm install
   npm run dev

3. **database**

   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=jobhelper
   DB_USERNAME=root
   DB_PASSWORD=
 Ensure that your .env file has the correct database settings

5. **MIGRATE**

   ```bash
   php artisan migrate
   php artisan serve

## Endpoints Documentation

get all elements by api 
![Captura de pantalla 2024-12-11 002958](https://github.com/user-attachments/assets/1a714bb9-63c6-4436-ae88-afa7479277f8)


get a element by id 
![Captura de pantalla 2024-12-11 003018](https://github.com/user-attachments/assets/1def4a1a-7325-4671-99cd-92d803eab9ea)


delete a element by id 
![Captura de pantalla 2024-12-11 003036](https://github.com/user-attachments/assets/ddd68151-03ff-4389-9bda-c570fae205c3)


post new element by api
![Captura de pantalla 2024-12-11 003055](https://github.com/user-attachments/assets/9958535b-6161-4ce9-8ac8-c1b6a5389c64)


put a element by api 
![Captura de pantalla 2024-12-11 003117](https://github.com/user-attachments/assets/8314dc62-91dc-4bc7-b035-280dfdbed285)

## tests
1. **Run the following command to execute the tests::**

   ```bash 
   php artisan test
![Captura de pantalla 2024-12-11 004045](https://github.com/user-attachments/assets/54d014b9-24e9-413c-ba90-9cee3e155bf0)

## Database Diagrams


![Captura de pantalla 2024-12-11 005109](https://github.com/user-attachments/assets/dc78bbe6-19ff-4e0a-ba43-c020b9969d12)





## autors

Issam chellaf - https://www.linkedin.com/in/issam-chellaf-1099352bb/
