# Real-Time Collaborative Document Editor (Google Docs)

## Deskripsi Project
Project ini merupakan aplikasi collaborative document editor berbasis web yang dibuat menyerupai Google Docs. Aplikasi memungkinkan user untuk membuat, membuka, mengedit, dan menghapus dokumen secara online menggunakan sistem authentication.

Pada progress saat ini, setiap document sudah terhubung dengan user yang login sehingga masing-masing user memiliki document sendiri. Project juga sudah memiliki halaman open document dan sistem auto refresh sederhana sebagai simulasi realtime.

## Fitur yang Sudah Dibuat
- Login User
- Register User
- Logout User
- Dashboard User
- Create Document
- Read Document
- Update Document
- Delete Document
- Open Document
- Document Per User
- Auto Refresh Realtime Simulation
- Authentication System
- GitHub Repository Setup

## Teknologi yang Digunakan
- Laravel
- Laravel Breeze
- PHP
- Composer
- Node.js
- NPM
- SQLite
- Git
- GitHub

## Progress Project
- [x] Setup Laravel Project
- [x] Install Laravel Breeze
- [x] Authentication Login
- [x] Authentication Register
- [x] Authentication Logout
- [x] Dashboard User
- [x] Setup GitHub Repository
- [x] Create Document
- [x] Read Document
- [x] Update Document
- [x] Delete Document
- [x] Open Document
- [x] Document Per User
- [x] Auto Refresh Realtime Simulation
- [ ] Realtime Collaborative Editing
- [ ] Multi User Collaboration
- [ ] Live User Presence
- [ ] Version History
- [ ] Conflict Resolution

## Struktur Project

### Model
- `app/Models/Document.php`
  Menghubungkan Laravel dengan tabel documents pada database.

### Migration
- `database/migrations/create_documents_table.php`
  Membuat tabel documents beserta relasi user_id.

### Controller
- `app/Http/Controllers/DocumentController.php`
  Mengatur proses CRUD document dan open document.

### Views
- `resources/views/documents/index.blade.php`
  Halaman daftar document.

- `resources/views/documents/create.blade.php`
  Halaman membuat document.

- `resources/views/documents/edit.blade.php`
  Halaman edit document.

- `resources/views/documents/show.blade.php`
  Halaman membuka document.

### Routes
- `routes/web.php`
  Berisi route authentication dan route CRUD document menggunakan Route::resource().

## Cara Menjalankan Project

### 1. Jalankan Laravel Server
```bash
php artisan serve
```

### 2. Jalankan Vite
Buka terminal baru lalu jalankan:

```bash
npm run dev
```

### 3. Buka Browser
```text
http://127.0.0.1:8000
```

## Status Project
Project saat ini sudah menyelesaikan authentication system, CRUD document, open document page, document per-user, dan simulasi realtime sederhana menggunakan auto refresh. Tahap berikutnya adalah membangun realtime collaborative editing agar beberapa user dapat mengedit document secara bersamaan seperti Google Docs.

## Repository GitHub
https://github.com/azmiakbar/project2_google-docs
