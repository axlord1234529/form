# Contact Form

A simple contact form application that saves form data into a database.

## Table of Contents

- [Description](#description)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)

## Description

The Contact Form is a symfony web application that allows users to submit their contact information and messages through a form. The submitted data is then stored in a database for later retrieval and processing. The application provides a user-friendly interface and incorporates Bootstrap for a responsive design.

## Technologies Used
- Symfony
  - Symfony is a PHP web application framework that provides a solid foundation for building robust and scalable web applications.

- [Bootstrap](https://getbootstrap.com/)
  - Bootstrap is a popular front-end framework used for creating responsive and visually appealing user interfaces. It was utilized in this project to enhance the appearance and layout of the contact form.

- Docker
  - Docker is a containerization platform used to manage and deploy applications. In this project, Docker is utilized to set up and manage the MySQL database used to store the form data.

## Installation

To get started with the Simple Contact Form, follow these steps:

1. Clone the repository:
    - https://github.com/axlord1234529/form

2. Install dependencies:<br>
     ```shell 
    composer install
    ```
    ```shell 
    yarn install
    ```
    or
     ```shell 
     npm install
     ```
 3. Set up the MySQL database using Docker:
    ```shell
    docker-compose up -d
    symfony console doctrine:migration:migrate
    ``` 
 4. Run the application:
    ```shell
    symfony server:start
    ```
 5. Access the application in your web browser:
      - http://localhost:8000

## Usage

1. Open the application in your web browser using the provided URL.

2. Fill in the contact form with your name, email address, and message.

3. Click the submit button to send the form data.

4. If the form submission is successful, you will see a success message indicating that your question has been received. You will also receive a response via email soon.

5. The submitted form data will be stored in the MySQL database for further processing.
