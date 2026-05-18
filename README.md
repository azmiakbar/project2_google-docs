# Real-Time Collaborative Document Editor

## Deskripsi Project
Project ini adalah aplikasi collaborative document editor berbasis web menggunakan Laravel. Aplikasi ini dibuat menyerupai konsep dasar Google Docs, yaitu user dapat membuat, membuka, mengedit, dan membagikan dokumen secara online melalui share link.

Project ini sudah mendukung multi-user editing, realtime document update, typing tracking sederhana, version history, conflict resolution, rich text editor, dan authentication user.

---

## Fitur Utama

### Authentication
- Register user
- Login user
- Logout user

### Document Management
- Create document
- Read / open document
- Update document
- Delete document
- Share link document

### Collaboration
- Multi-user editing
- Multi-device access
- Realtime document update
- Realtime title update
- Realtime typing/activity tracking
- Live user presence

### Versioning & Conflict
- Version history
- Menyimpan isi dokumen sebelum di-update
- Conflict detection
- Warning ketika dokumen sudah diubah oleh user lain

### Rich Text Editor
- CKEditor 5
- Bold
- Italic
- Heading
- Bullet list
- Toolbar formatting

---

## Teknologi yang Digunakan
- Laravel 12
- Laravel Breeze
- Laravel Reverb
- Laravel Echo
- CKEditor 5
- PHP
- Composer
- SQLite
- Node.js
- NPM
- Tailwind CSS
- Git
- GitHub

---

## Progress Project

- [x] Setup Laravel project
- [x] Authentication user
- [x] CRUD document
- [x] Share link document
- [x] Multi-user editing
- [x] Multi-device access
- [x] Realtime document update
- [x] Realtime typing tracking
- [x] Live user presence
- [x] Version history
- [x] Conflict resolution
- [x] Rich text editor
- [x] UI sederhana untuk dashboard dan halaman dokumen

---

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
php artisan serve --host=0.0.0.0 --port=8001
```

### 6. Jalankan Laravel Reverb
```bash
php artisan reverb:start --host=0.0.0.0 --port=8080
```

### 7. Jalankan Vite
```bash
npm run dev
```

### 8. Buka Browser
```text
http://127.0.0.1:8001
```

---

## Testing Multi-device

Cari IP laptop:

```bash
ipconfig
```

Buka dari device lain:

```text
http://IP-LAPTOP:8001
```

Contoh:

```text
http://192.168.100.118:8001
```

---

## Status Project
Project saat ini sudah berhasil membangun collaborative document editor sederhana dengan fitur utama seperti multi-user editing, realtime document synchronization, realtime typing tracking, version history, conflict resolution, dan rich text editor.

---

## Repository
https://github.com/azmiakbar/project2_google-docs