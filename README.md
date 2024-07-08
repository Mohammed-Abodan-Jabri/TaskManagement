<img src="/public/assets/img/Dashboard.jpeg"  width="50%"/>
<img src="/public/assets/img/landing-page.jpeg"  width="50%"/>
# Task Management Application 

Welcome to Task Management,

## Project Overview

 Task manager lets you create tasks with titles, descriptions, and deadlines. You can track progress, filter by status (completed, new, in progress), and manage your tasks efficiently.

### Key Features

-User Login and Logout: The system allows users to create accounts, log in, and log out securely.
-Create New Tasks: Users can add new tasks with the ability to specify the task title, description, and due date.
-View List of Tasks for Each User: A list of all the current user's tasks is displayed, along with the task status (completed, new, in progress).
-Edit and Delete Tasks: Users can edit or delete any task they have created.
-Track Task Progress: Users can indicate the task completion percentage using a progress bar.
-Filter Tasks Based on Status: The interface allows filtering tasks based on their status (completed, new, in progress)

## Laravel Setup

To get started with Task management in a Laravel environment, follow these steps:

```bash
# Clone the repository
git clone https://github.com/Mohammed-Abodan-Jabri/TaskManagement.git

# Install Laravel dependencies
composer install

# Copy the .env.example file and configure your database connection
cp .env.example .env


# database : you will find the sql file for the project in folder called folderdb;
#import the sql file to create the project database 
# Email: user1@gmail.com
#Password: 123456789
or use Migration and Database Setup;

# Serve the application
php artisan serve
This guide provides a concise explanation of how to use the Task Management project.
