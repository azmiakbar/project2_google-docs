# Real-Time Collaborative Document Editor (Google Docs)

## Deskripsi Project
Project ini merupakan aplikasi collaborative document editor berbasis web yang dibuat menyerupai Google Docs menggunakan Laravel. Aplikasi memungkinkan user untuk membuat, membuka, mengedit, menghapus, dan membagikan document secara online.

Pada progress saat ini, aplikasi sudah mendukung authentication user, CRUD document, document per-user, share link document, collaboration simulation antar device, serta version history untuk menyimpan riwayat perubahan document.

## Fitur yang Sudah Dibuat

### Authentication
- Login User
- Register User
- Logout User

### CRUD Document
- Create Document
- Read Document
- Update Document
- Delete Document

### Document System
- Open Document
- Document Per User
- Share Document Link
- Multi-device Access

### Collaboration Simulation
- Auto Refresh setiap 5 detik
- Simulasi collaborative editing sederhana
- Perubahan document dapat terlihat di device lain

### Version History
- Menyimpan riwayat perubahan document
- Menyimpan isi lama document
- Menyimpan user yang melakukan perubahan

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
- [x] Setup GitHub Repository
- [x] Create Document
- [x] Read Document
- [x] Update Document
- [x] Delete Document
- [x] Open Document
- [x] Document Per User
- [x] Share Document Link
- [x] Multi-device Access
- [x] Collaboration Simulation
- [x] Version History
- [ ] Realtime Collaborative Editing
- [ ] Live User Presence
- [ ] Conflict Resolution
- [ ] Rich Text Editor
- [ ] WebSocket Integration

## Struktur Project

### Model
- `app/Models/Document.php`
- `app/Models/DocumentHistory.php`

### Controller
- `app/Http/Controllers/DocumentController.php`

### Migration
- `create_documents_table.php`
- `create_document_histories_table.php`

### Views
- `documents/index.blade.php`
- `documents/create.blade.php`
- `documents/edit.blade.php`
- `documents/show.blade.php`

### Routes
- `routes/web.php`

## Cara Menjalankan Project

### 1. Clone Repository
```bash
git clone https://github.com/azmiakbar/project2_google-docs.git
```

### 2. Masuk ke Folder Project
```bash
cd project2_google-docs
```

### 3. Install Dependency
```bash
composer install
npm install
```

### 4. Jalankan Migration
```bash
php artisan migrate
```

### 5. Jalankan Laravel Server
```bash
php artisan serve
```

### 6. Jalankan Vite
Buka terminal baru lalu jalankan:

```bash
npm run dev
```

### 7. Buka Browser
```text
http://127.0.0.1:8000
```

## Testing Collaboration Multi-device

### Jalankan Laravel dengan Host
```bash
php artisan serve --host=0.0.0.0 --port=8001
```

### Cari IPv4 Laptop
```bash
ipconfig
```

### Buka di Device Lain
```text
http://IP-LAPTOP:8001
```

Contoh:
```text
http://192.168.100.118:8001
```

## Status Project
Project saat ini sudah berhasil membangun collaborative document editor sederhana berbasis Laravel dengan authentication, CRUD document, document sharing, collaboration simulation antar device, dan version history.

## Repository GitHub
https://github.com/azmiakbar/project2_google-docs
