# LinnaTaxi Website - Team 17

## Introduction

LinnaTaxi Website is a taxi booking and management system from Hämeenlinna to all over Finland. This sophisticated web-based platform offers multiple functionalities designed to enhance both driver operations and customer experience. 

For transportation professionals, the system provides a streamlined registration process that allows drivers to join the Linna Taxi network.From the customer perspective, the website offers a convenient booking interface where users can schedule immediate  taxi services to any destination within Finland. 

The LinnaTaxi Website also features an integrated loyalty program that rewards frequent customers with benefits such as discounted fares, priority booking, or special promotions. The website includes mobile app integration, allowing customers to download the dedicated LinnaTaxi application. This integration is facilitated through direct links to app stores and scannable QR codes prominently displayed on the website, making the transition from web to mobile seamless for users who prefer accessing services on their smartphones.

Customer feedback is another critical component of the LinnaTaxi Website. The platform incorporates a comprehensive feedback system where passengers can rate their experience, provide detailed comments about their journey, and offer suggestions for service improvement.

Through this integrated approach, the LinnaTaxi Website serves as a central hub connecting drivers, customers, mobile applications, and company management in one cohesive digital ecosystem designed to optimize taxi services throughout Finland.

## Table of Contents

- [Features](#features)
- [Database Tables](#database-tables)
- [Created Forms](#created-forms)
- [Created Tables](#created-tables)

## Features

 - [x] Feature 01 (Jathun Arachchige Darshana) : Customer Loyalty Registration
 - [x] Feature 02 (Walpita Gamage Thanuja) : Ride booking system
 - [x] Feature 03 (Thommaya Hakuru Shalika) : Driver Registration 
 - [x] Feature 04 (Puwakdandawa Guruge Amila) : Customer feedback submission
 - [x] Feature 05 (Jathun Arachchige Darshana): Admin Dashboard
 
<br/>

Feature 01 : Customer Loyalty Registration

Customer Loyalty Registration is for registering to the customers by using a form as a regular customers of LinnaTaxi service.The index page is linked to Customer Loyalty Registration form and After fill the fields of customer's name, mobile number etc., there has the option to Register in the LinnaTaxi service. In here, database used for collect and store the details of registered customers.
    
        Related codes: 

        https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/index.php

        https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/index.css

        https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/dataloyalty.php

        https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/loyaltyregistration.php

        https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/loyaltyregistration.css

        Link to the feature: 
    
https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/index.php

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/loyaltyregistration.php


Feature 02 : Ride booking system

Ride booking system is a taxi reservation system for the customers. In here, system requires the name, start and end locations of the customers and the mobile number. After submitting the form, the used name and mobile fields are auto fill by using cookies and can used again for book another ride for a specific time (1 hour). All the data saved successfully in the table named "ride" in the database.

        Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/ride.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/ride.css

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/dataride.php

        Link to the feature:

https://shell.hamk.fi/~amk1001929/Test1_PHP_LinnaTaxi/ride.php


Feature 03 : Driver Registration

Driver Registration is for Drivers. In this feature, it offers the opportunity to register a person as a driver at LinnaTaxi service and the registered drivers get the chance to earn as a taxi driver. This form has some selection fields to fill such as working district, available time slots so on. Data stored at the table "drivers" in the data base.

        Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/drive.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/drive.css

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/data_drive.php

        Link to the feature:

https://shell.hamk.fi/~amk1003219/Test1_PHP_LinnaTaxi/drive.php


Feature 04 : Customer feedback submission

Customer feedback submission is for submit the customer's view of the quality and experience of the LinnaTaxi service."about us" page is linked to "feedback" page. In here, collected feedback is stored in "feedback" table in the data base.

        Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/aboutus.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/aboutus.css
    
https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/feedback.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/datafeedback.php

        Link to the feature: 
    
https://shell.hamk.fi/~amk1002436/Test1_PHP_LinnaTaxi/aboutus.php

https://shell.hamk.fi/~amk1002436/Test1_PHP_LinnaTaxi/feedback.php


Feature 05 : Admin Dashboard

In this web page, there has an admin dash board attached to index.php for only the back end administration staff. They can view, update or delete the relevant data if necessary.

username : admin   and password: password@123   for access the admin dash board page.

        Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/dashboard.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/login.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/update_driver.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/update_feedback.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/update_loyalty.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/update_ride.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/view_drivers.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/view_feedback.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/view_loyalty.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/view_ride.php

        Link to the feature: 

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/crud/login.php

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/crud/dashboard.php

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/crud/view_loyalty.php


## Database Tables

List of the database tables of the project.

- Table 1 (Jathun Arachchige Darshana) : loyalty
- Table 2 (Walpita Gamage Thanuja) : ride 
- Table 3 (Thommaya Hakuru Shalika) : drivers
- Table 4 (Puwakdandawa Guruge Amila) : feedback

## ER Diagram of the database.

![ER Diagram](<Images/ER Diagram.jpg>)

## Created Forms

List of the forms 

- Form 1 (Jathun Arachchige Darshana): Customer Loyalty Registration

        Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/index.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/index.css

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/dataloyalty.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/loyaltyregistration.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/loyaltyregistration.css


        Link to the feature: 
        
https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/index.php

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/loyaltyregistration.php


        Validations applied:

        - Required field validation
        
        - Input type validation 

        - Manual field validation

        - Event prevention 

        - Popup feedback

        - Form field type validation

        - Password field

        - Redirection validation


- Form 2 (Walpita Gamage Thanuja): Ride booking system

        Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/ride.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/ride.css

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/dataride.php


        Link to the feature:

https://shell.hamk.fi/~amk1001929/Test1_PHP_LinnaTaxi/ride.php


        Validations applied:

        - Required field validation
        
        - Input type validation 

        - Manual field validation

        - Prevent default submission

        - Feedback validation

        - Prefill inputs

        - Session management

        - Dynamic validation

- Form 3 (Thommaya Hakuru Shalika): Driver Registration

       Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/drive.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/drive.css

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/data_drive.php


        Link to the feature:

https://shell.hamk.fi/~amk1003219/Test1_PHP_LinnaTaxi/drive.php


        Validations applied:

        - Required field validation
        
        - Input type validation 

        - Dropdown validation

        - Form submission control

        - Popup confirmation

        - Keyboard and overlay events

- Form 4 (Puwakdandawa Guruge Amila): Customer feedback submission

        Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/aboutus.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/styles/aboutus.css
    
https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/feedback.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/datafeedback.php


        Link to the feature: 
        
https://shell.hamk.fi/~amk1002436/Test1_PHP_LinnaTaxi/aboutus.php

https://shell.hamk.fi/~amk1002436/Test1_PHP_LinnaTaxi/feedback.php


        Validations applied:

        - Required field validation
        
        - Input type validation 

        - Server-side PHP validation

        - Java script validation

- Form 5 (Jathun Arachchige Darshana): Admin Dashboard 

        Related codes: 

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/dashboard.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/login.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/update_driver.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/update_feedback.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/update_loyalty.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/update_ride.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/view_drivers.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/view_feedback.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/view_loyalty.php

https://github.com/amk1001928/Test1_PHP_LinnaTaxi/blob/main/crud/view_ride.php


        Link to the feature:   

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/crud/login.php

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/crud/dashboard.php

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/crud/view_loyalty.php 



## Created Tables

List of the tables created in the project work

- Table 1 (Jathun Arachchige Darshana) : loyalty

        Related codes: 

https://shell.hamk.fi/pma/index.php?route=/sql&pos=0&db=wp_amk1001928&table=loyalty_customers

        Link to the feature: 

https://shell.hamk.fi/~amk1001928/Test1_PHP_LinnaTaxi/loyaltyregistration.php

- Table 2 (Walpita Gamage Thanuja) : ride

        Related codes: 

https://shell.hamk.fi/pma/index.php?route=/sql&pos=0&db=wp_amk1001929&table=ride
   
        Link to the feature:

https://shell.hamk.fi/~amk1001929/Test1_PHP_LinnaTaxi/ride.php

        

- Table 3 (Thommaya Hakuru Shalika) : drivers

        Related codes: 

https://shell.hamk.fi/pma/index.php?route=/sql&pos=0&db=wp_amk1003219&table=drivers

        Link to the feature:

https://shell.hamk.fi/~amk1003219/Test1_PHP_LinnaTaxi/drive.php

- Table 4 (Puwakdandawa Guruge Amila) : feedback

        Related codes: 
        
https://shell.hamk.fi/pma/index.php?route=/sql&pos=0&db=wp_amk1002436&table=feedback

        Link to the feature: 

https://shell.hamk.fi/~amk1002436/Test1_PHP_LinnaTaxi/feedback.php


## Team Members

- Jathun Arachchige Darshana
- Walpita Gamage Thanuja
- Thommaya Hakuru Shalika
- Puwakdandawa Guruge Amila