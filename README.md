# BatWise Cricket

## Overview
BatWise Cricket is a database-driven website focused on cricket bats for adult players.  
The website provides information about cricket bat types, materials, sizes, and a shop catalogue that displays available products.

This project is part of a coursework assignment to demonstrate the use of HTML5, CSS3, PHP, and MySQL in building a content management system.

---

## Features
- Multiple linked web pages (Home, About Us, Shop, Contact, Register, Login, Members Area, and Add Bat)
- Semantic HTML5 structure for accessibility and maintainability
- Responsive navigation and page layout
- Member registration and login system
- Protected members’ area using PHP sessions
- Database-driven cricket bat catalogue
- Image upload support for new bat entries
- Contact form with validation and user feedback
- Reusable footer included with PHP

---

## Technologies Used
- HTML5
- CSS3
- PHP
- MySQL
- JavaScript

---

## Homepage Development

The homepage (`index.php`) has been developed using a semantic HTML5 structure.  
It includes a header with a logo and site title, and a navigation menu linking to all main pages of the website.

The main content is organised into sections, providing:
- an introduction to the BatWise Cricket website  
- information about adult cricket bats  
- an overview of the features available to users  

Accessibility principles have been considered by:
- using semantic elements such as `<header>`, `<nav>`, `<main>`, and `<section>`
- applying a clear heading hierarchy
- including alternative text for images
- adding a responsive viewport meta tag

The footer is included using PHP (`require_once`), allowing it to be reused across multiple pages and improving maintainability.

---

## Web Pages

Multiple pages were created to organise content and improve navigation for users.

### About Us Page (`about_us.php`)
The About Us page explains the purpose of BatWise Cricket, its background, and its aims.  
It provides users with more information about the website and its specialist focus on cricket bats.

---

### Shop Page (`shop.php`)
The Shop page displays cricket bats stored in the database.  
Each bat is shown as a card containing:
- image
- name
- brand
- category
- price
- bat size
- material
- description

This page is database-driven and retrieves information using PHP and MySQL.

---

### Contact Page (`contact.php`)
The Contact page includes a form where users can enter their name, email address, and message.  
Basic validation is implemented, and feedback messages are displayed after submission.

---

### Register Page (`register.php`)
The Register page allows new users to create an account.  
User details are stored in the database, and passwords are securely hashed before being saved.

This page includes:
- first name
- last name
- username
- password
- confirm password
- show/hide password functionality using JavaScript

---

### Login Page (`login.php`)
The Login page allows registered users to log in securely.  
PHP is used to check the username and password against the database, and `password_verify()` is used to validate the hashed password.

Successful login creates a session and redirects the user to the members’ area.

---

### Members Area (`members.php`)
The members’ area is protected using PHP sessions so that only logged-in users can access it.  

From this page, members can:
- view all bats in the catalogue
- add a new cricket bat
- log out of the system

---

### Add Bat Page (`add_bat.php`)
The Add Bat page allows authorised members to add a new cricket bat to the database.  

The form collects:
- bat name
- brand
- category
- price
- bat size
- material
- description
- image

Uploaded images are stored in the `uploads` folder, while the file name and bat details are stored in the database.

---

### Footer (`project_footer.php`)
The footer is included across multiple pages using PHP `require_once`, which improves consistency and reduces repeated code.

---

## CSS Styling
The stylesheet (`styles.css`) provides the visual design of the website.

It includes:
- header and navigation styling using Flexbox
- card-based layout for content sections
- grid layout for the bat catalogue
- contact page layout styling
- responsive design for different screen sizes
- button, form, and footer styling

---

## Database Integration
The project uses MySQL to store and manage data.

Main tables include:
- `users` for member registration and login
- `bats` for the cricket bat catalogue

PHP and MySQL are connected through the `db.php` file using MySQLi.

---

## Security Features
Security has been considered throughout the project by:
- using prepared statements to reduce SQL injection risk
- using `htmlspecialchars()` when displaying user-generated content
- hashing passwords with `password_hash()`
- verifying passwords with `password_verify()`
- protecting the members’ area with PHP sessions