# Sneaker Spot - Front-End Web Dev Project
Sneaker Spot is my first university web development project, with a strong emphasis on front-end development. This project incorporates HTML, CSS, JavaScript, PHP, and a dash of Bootstrap. It's a virtual sneaker store where users can register, log in, explore sneakers, add them to a cart, and contact the administrators.

To run it locally, use XAMPP or WAMPSERVER. Let's dive into this dynamic front-end web experience!

## Project Overview
Sneaker Spot is a web application designed to simulate an online sneaker store. It incorporates HTML, CSS, JavaScript, PHP, and a bit of Bootstrap to create a dynamic and user-friendly experience for sneaker enthusiasts. The primary features of the website include user registration and login functionality, product browsing, adding items to the shopping cart, and a contact us page for inquiries.

## Project Structure
The project consists of five main pages:

1. Registration Page: Allows users to create a new account. User data will be securely stored in a database.

2. Login Page: Provides a secure authentication system for registered users to log in and access their accounts.

3. Main Page: This is the landing page of the website. It may contain featured products, announcements, or other information.

4. Store Page: Here, users can browse and view different sneakers available for purchase. They can also add items they like to their shopping cart.

5. Contact Us Page: This page allows users to send inquiries or feedback to the website's administrators.

##Getting Started
To run the "Sneaker Spot" website on your local machine, you'll need a server environment like XAMPP or WAMPSERVER. Follow these steps:

1.Download and Install XAMPP/WAMPSERVER: Download and install XAMPP or WAMPSERVER on your computer from their official websites. Ensure that the necessary services (Apache, MySQL) are running.

2. Clone or Download the Project: Clone the project's repository from GitHub or download the project files as a ZIP archive.

3. Place Project Files: Extract the project files (HTML, CSS, JavaScript, and PHP files) into the appropriate directory of your XAMPP or WAMPSERVER installation. Typically, you would place them in the htdocs folder for XAMPP or www folder for WAMPSERVER.

4. Database Configuration:

- Create a MySQL database. You can do this by accessing phpMyAdmin through your server environment (usually at http://localhost/phpmyadmin).
- Create a table named "users" with the following structure:
id (integer, primary key)
full_name (varchar)
email (varchar)
password (varchar)
- Configuration File: Update the database connection settings in the database.php file to match your local database setup. Change the username and password to your database credentials.

- Access the Website: Open your web browser and enter the following URL: http://localhost/ (file name)

## Usage
- Register an account using the Registration Page.
- Log in to your account using the Login Page.
- Browse the available sneakers on the Store Page and add items to your shopping cart.
- Use the Contact Us Page to send inquiries or feedback.
- ## Screenshots

For a visual preview of SneakerSpot, please refer to the [Screenshots-SneakerSpot](Screenshots-SneakerSpot/) folder.

## Additional Notes
- Make sure to validate user inputs to enhance security and prevent data manipulation.
- You can further customize the website's appearance and functionality by modifying the HTML, CSS, and JavaScript files as needed.
- Regularly back up your database to prevent data loss.
- Make sure the path of the images is correct.
