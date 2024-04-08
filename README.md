# Kanban Vue Laravel

Welcome to the `kanban-vue-laravel` project! This application combines the power of Vue.js for the frontend and Laravel for the backend, providing a seamless Kanban board experience. Manage your projects and tasks with ease through a user-friendly interface and robust backend.

![Kanban Board Screenshot](./docs/kanban_board_screenshot.png)

## Features

- **Dynamic Kanban Boards**: Create, delete, and manage boards with custom columns.
- **Drag-and-Drop Interface**: Easily move tasks across columns and boards.
- **Real-Time Updates**: Changes made by any team member are instantly visible to all users.
- **Authentication**: Secure login and registration functionality.
- **User Profiles**: Customize your profile and manage your tasks efficiently.
- **Responsive Design**: Fully responsive interface, providing an optimal experience across various devices.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.0
- Composer
- Node.js and npm
- A database (MySQL, PostgreSQL, SQLite, etc.)
- Any web server (Apache, Nginx, etc.)

## Installation

1. **Clone the repository**

git clone https://github.com/yourusername/kanban-vue-laravel.git
cd kanban-vue-laravel

1. Install Laravel dependencies
    ```
        composer install
    ```
2. Set up the environment file
    Copy the .env.example file to .env and adjust the database and other configurations as needed.
    ```
        cp .env.example .env 
    ```
3. Generate the application key
    ``` 
        php artisan key:generate 
    ```
4. Run the database migrations (Make sure your database is set up correctly in .env)
    ``` 
        php artisan migrate
        php artisan db seed
    ```

5. Install Vue.js dependencies
    ``` 
        cd frontend && npm install
    ```
6. Serve the application
    ``` 
        npm run serve 
    ```

Now, visit http://localhost:8000 in your browser to see the application in action.



## License

This project is licensed under the MIT License - see the LICENSE.md file for details.

## Acknowledgments
Vue.js team for the amazing frontend framework.
Laravel team for the robust backend framework.
All contributors who have helped to build this project.
