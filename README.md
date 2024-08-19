# Anime and Character Management System

## Intro to the Project
This project is a web-based application built with Laravel for managing anime shows and their characters. It provides functionality for adding, editing, and deleting animes and characters, with a user-friendly interface for both public and admin users.

## Features and Database Schema
The application includes:
- **CRUD Modules** for Anime and Characters:
  - **Anime**: Title, Description, Episodes, Image URL, Status, Genre, Release Date.
  - **Character**: Name, Bio, Image URL, Gender, Age, Anime ID (foreign key).
- **Relationship**: Each anime can have multiple characters, forming a one-to-many relationship.
- **Authentication**: Admin users can manage all CRUD operations, while regular users can view public information.

**Database Schema:**
- **Animes** Table: `id`, `title`, `description`, `episodes`, `image_url`, `status`, `genre`, `release_date`
- **Characters** Table: `id`, `name`, `bio`, `image_url`, `gender`, `age`, `anime_id` (foreign key)

## Screenshots
1. **Home Page**
   ![Home Page](https://github.com/user-attachments/assets/714cdb6e-3900-4802-9dad-8374396d096a)

3. **Anime Index**
   ![Anime Index](https://github.com/user-attachments/assets/9ca720f9-de5c-44f9-bb18-be48877e5814)

5. **Anime Details**
   ![Anime Details](https://github.com/user-attachments/assets/4c91857a-343f-4a2c-8b63-7414a425d96a)

6. **Character Index**
   ![Character Index](https://github.com/user-attachments/assets/f6d9a6e2-8ca8-4c39-b4f3-7342fc8fc7ac)

7. **Character Details**
   ![Character Details](https://github.com/user-attachments/assets/a930b7e4-3fd8-4a32-9f65-4a9469c0f7ba)

8. **Admin Dashboard**
   ![Admin Dashboard](https://github.com/user-attachments/assets/7eb9572f-b360-4d1a-a010-70f1baaebbc3)

9. **Add Anime**
   ![Create Anime Form](https://github.com/user-attachments/assets/e302d89d-e483-43dd-8ba5-d8f2acf60e69)

10. **Edit Anime**
   ![Edit Anime Form](https://github.com/user-attachments/assets/aa64cd4b-a4c5-4f52-aba7-e4e91c9e9e5f)

11. **Add Character**
   ![Create Character Form](https://github.com/user-attachments/assets/c3cf17e4-83ab-45b8-9762-af7140843102)

12. **Edit Character**
    ![Edit Character Form](https://github.com/user-attachments/assets/a8976300-470c-4f48-9bf4-61b58f121a57)

##Reflection on Laravel and this Course
Developing with Laravel proved to be a significant improvement over working with vanilla PHP. The framework’s features streamlined development and allowed me to focus more on functionality, reminiscent of my experience with JavaScript frameworks, which I prefer and am more familiar with.

The course covered the essential aspects of Laravel effectively. For further exploration, integrating Laravel with modern front-end frameworks like Vue.js could provide a more comprehensive full-stack development experience.
