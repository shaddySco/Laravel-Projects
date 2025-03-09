# Contact Management System (Laravel)

## 📌 Overview
This is a Laravel-based Contact Management System that allows users to:
- Add, update, and delete contacts.
- Search for contacts by name or email.
- Filter contacts based on category (e.g., Personal, Business).

## 🚀 Features
- User-friendly interface with Bootstrap styling.
- Search and filter functionality.
- Flash messages for success feedback.
- Confirmation prompt before deleting contacts.
- Organized and structured Laravel MVC architecture.

## 🛠️ Installation
1. **Clone the repository:**
   ```sh
   git clone https://github.com/your-repo/contact-management.git
   cd contact-management
   ```
2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```
3. **Set up environment:**
   - Copy the `.env.example` file and rename it to `.env`:
     ```sh
     cp .env.example .env
     ```
   - Generate the application key:
     ```sh
     php artisan key:generate
     ```
   - Configure your database credentials in `.env`.
4. **Run database migrations:**
   ```sh
   php artisan migrate
   ```
5. **Start the application:**
   ```sh
   php artisan serve
   ```
   Open `http://127.0.0.1:8000` in your browser.

## 📂 Project Structure
```
app/
├── Http/
│   ├── Controllers/
│   │   ├── ContactController.php
│
├── Models/
│   ├── Contact.php
│
resources/views/contacts/
│   ├── index.blade.php
│   ├── create.blade.php
│   ├── edit.blade.php
│
routes/
├── web.php
```

## 📝 API Endpoints
| Method | Endpoint          | Description                 |
|--------|------------------|-----------------------------|
| GET    | `/contacts`       | View all contacts          |
| GET    | `/contacts/create` | Show create contact form   |
| POST   | `/contacts`       | Store a new contact        |
| GET    | `/contacts/{id}/edit` | Edit contact form    |
| PUT    | `/contacts/{id}`   | Update contact details     |
| DELETE | `/contacts/{id}`   | Delete a contact           |

## 🔗 Contributing
Feel free to submit issues and pull requests to improve this project!