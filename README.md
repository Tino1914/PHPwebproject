# WEB Project by Konstantin and Antonio

## General Information

We are using xampp's localhost phpmyadmin, and therefore we have a folder named "Databases" in our repository. There we have exported our database. The name we use for our database is "login".

## Webfolder name
We have a config.php file, which we use throughout various pages on our website. The config has a base directory defined, which we use for redirecting. The name of our webfolder is "website", therefore in order for the website to function properly, the website needs to be added into a folder named "website" in the htdocs of xampp.

### CRUD
We have CRUD implemented - users can register, their credentials can be updated once an admin is logged in and has accessed the "Admin" button appearing on the navigation bar. Credentials for admin login:

```
Username - admin
Password - admin
```
### AJAX implementation
We have AJAX implemented on the register form. Once a user inputs their info and proceeds to register, an ajax alert pops up, notifying whether the registration has been successful or unsuccessful.

### Bootstrap
As we discussed in our previous meeting, we came to a conclusion that it is okay to use bootstrap as long as the main designing is done through CSS, therefore we have little tweaks here and there made with bootstrap. Nothing major done with it, though.

### Products page
The products on our product page are managed through the database. 

### Different kind of users
We have different types of users, therefore different kinds of access throughout the website. There are admins and normal users. Admin have the possibility to make use of the "Admin" tab where they could manage the employees and their credentials.