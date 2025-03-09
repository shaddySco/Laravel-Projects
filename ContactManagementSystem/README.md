# Contact Management System (Laravel)

## 📌 Overview
This is a Laravel-based Contact Management System that allows users to:
- Add, update, and delete contacts.
- Search for contacts by name or email.
- Filter contacts based on category (e.g., Personal, Business).
- **Generate and download a PDF of the contact list.**

## 🚀 Features
- User-friendly interface with Bootstrap styling.
- Search and filter functionality.
- Flash messages for success feedback.
- Confirmation prompt before deleting contacts.
- **Export contact list as a PDF.**
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

## 👤 Managing Contacts
- Navigate to the **Contacts** page to view, create, edit, or delete contacts.
- Use the **search and filter** options to find specific contacts.
- Click the **"Download PDF"** button to generate and save the contact list as a PDF.

## 📚 Generating and Downloading PDF
### Install Required Package
Ensure you have the **DomPDF** package installed:
```sh
composer require barryvdh/laravel-dompdf
```

### Controller Method (`exportPDF`)
Modify `ContactController.php`:
```php
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\Contact;

public function exportPDF()
{
    $contacts = Contact::all();
    $pdf = PDF::loadView('contacts.pdf', compact('contacts'));

    return $pdf->download('contacts_list.pdf');
}
```

### PDF Blade Template (`resources/views/contacts/pdf.blade.php`)
```blade
<!DOCTYPE html>
<html>
<head>
    <title>Contacts List</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        h1 { color: #4A90E2; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #4A90E2; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .footer { margin-top: 20px; font-size: 12px; color: #555; }
    </style>
</head>
<body>
    <h1>Contacts List</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $index => $contact)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone ?? 'N/A' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p class="footer">Generated on {{ now()->format('Y-m-d H:i:s') }}</p>
</body>
</html>
```

### Route for PDF Export
Ensure this route is in `web.php`:
```php
Route::get('/contacts/pdf', [ContactController::class, 'exportPDF'])->name('contacts.pdf');
```

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
│   ├── pdf.blade.php
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
| GET    | `/contacts/pdf`    | **Download contacts PDF**  |

## 🔗 Contributing
Feel free to submit issues and pull requests to improve this project!

## 🐝 License
This project is open-source and available under the [MIT License](LICENSE).

