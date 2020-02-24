# Noticeboard Web Application
The git repository of the web based team project of the Trinity High School students

## Description:

This web application will be a simple noticeboard app. Users can log in and register to the website. Once they logged in they can view notices that other users or themselves left. They can also add new notices which can be public or private (if it is private other users cannot see that notice). A user can view the notices he/she published, even private ones. When viewing own notices a user can edit or delete them. 

Most of the backend functinality has been written for you, but there is a small chance that you will need to edit it to make sure it works for you. Don't worry I will be there to help if that's the case. Because of this you will only be concerned building the "frontend". This means you will need to use HTML, CSS, JavaScript and a tiny bit of PHP to build the looks. 

To help you I integrated Bootstrap 4 to the project, which means you have a huge amount pre-written CSS classes to work with. Bootstrap also comes with some cool pre-written JavasScript functions, but there is a chance that we need to modify them slightly. 

In the following I will be describing tasks. They won't be numbered, instead I will try to describe the different tasks that are needed for the project, and you can choose which ones you want to do.

The resources are here:


#### Bootstrap 4
https://getbootstrap.com/docs/4.4/getting-started/introduction/

#### HTML 
https://www.w3schools.com/html/

#### CSS
https://www.w3schools.com/css/

### PHP
https://www.php.net/docs.php

## Description of tasks:

### Setting up the project (Compulsory)

In case git is installed:

1. Open the terminal and navigate into the directory that you have your web projects set up
2. Once you are in there create a new folder by typing `mkdir Noticeboard`
3. Go inside that folder and type `git clone https://github.com/JustPawe/trinitywebapp.git`
4. If you set up everything corretly in the previous sessions you can just type `sudo service apache2 start`
5. In your browser navigate to `localhost/phpmyadmin` and login with the root credentials (it should be root and no password)
6. Click on Import and choose the file from the `database` folder called `noticeboard.sql`
7. Once you are done with this tell me and I will check if everything is fine ;) 

In case git is not installed 

1. Type `sudo apt-get update` and hit enter
2. Type `sudo apt install git`
3. Go through the in case of git is installed steps.

