# Real-Time Collaborative Document Editor (Google Docs)

## Deskripsi Project
Project ini merupakan aplikasi collaborative document editor berbasis web yang dibuat menggunakan Laravel. Aplikasi ini dirancang menyerupai konsep dasar Google Docs dimana banyak user dapat membuka, mengedit, dan membagikan document secara online melalui share link.

Saat ini aplikasi sudah mendukung authentication, CRUD document, multi-user editing dasar, collaboration simulation, live user presence, version history, dan conflict detection.

---

# Fitur yang Sudah Dibuat

## Authentication
- Login User
- Register User
- Logout User

## CRUD Document
- Create Document
- Read/Open Document
- Update Document
- Delete Document

## Document System
- Open Document
- Document Per User
- Share Document Link
- Multi-device Access

## Collaboration Features
- Multi-user Editing Dasar
- Collaboration Simulation
- Live User Presence
- Share Link Collaboration
- Realtime Foundation menggunakan Laravel Reverb

## Versioning & Conflict System
- Version History
- Menyimpan Riwayat Perubahan Document
- Menyimpan Isi Lama Document
- Menyimpan User yang Melakukan Perubahan
- Conflict Detection
- Warning ketika document sudah diubah user lain

---

# Teknologi yang Digunakan
- Laravel 12
- Laravel Breeze
- Laravel Reverb
- Laravel Echo
- PHP
- Composer
- Node.js
- NPM
- SQLite
- Tailwind CSS
- Git
- GitHub

---

# Progress Project

- [x] Setup Laravel Project
- [x] Install Laravel Breeze
- [x] Authentication Login
- [x] Authentication Register
- [x] Authentication Logout
- [x] CRUD Document
- [x] Open Document
- [x] Share Link Document
- [x] Multi-device Access
- [x] Multi-user Editing Dasar
- [x] Collaboration Simulation
- [x] Live User Presence
- [x] Version History
- [x] Conflict Detection
- [x] Realtime Foundation (Laravel Reverb)

## Fitur yang Masih Dalam Pengembangan
- [ ] Full Realtime Collaborative Editing
- [ ] Live Cursor Tracking

---

# Struktur Project

## Model
- `Document.php`
- `DocumentHistory.php`
- `DocumentPresence.php`

## Controller
- `DocumentController.php`

## Event
- `DocumentUpdated.php`

## Migration
- `create_documents_table.php`
- `create_document_histories_table.php`
- `create_document_presences_table.php`

## Views
- `documents/index.blade.php`
- `documents/create.blade.php`
- `documents/edit.blade.php`
- `documents/show.blade.php`

## Routes
- `routes/web.php`

---

# Cara Menjalankan Project

## 1. Clone Repository
```bash
git clone https://github.com/azmiakbar/project2_google-docs.git
```

## 2. Masuk ke Folder Project
```bash
cd project2_google-docs
```

## 3. Install Dependency
```bash
composer install
npm install
```

## 4. Jalankan Migration
```bash
php artisan migrate
```

## 5. Build Frontend
```bash
npm run build
```

## 6. Jalankan Laravel Server
```bash
php artisan serve --host=0.0.0.0 --port=8001
```

## 7. Jalankan Laravel Reverb
```bash
php artisan reverb:start --host=0.0.0.0 --port=8080
```

## 8. Buka Browser
```text
http://127.0.0.1:8001
```

---

# Testing Multi-device Collaboration

## Cari IPv4 Laptop
```bash
ipconfig
```

## Buka di Device Lain
```text
http://IP-LAPTOP:8001
```

Contoh:
```text
http://192.168.100.118:8001
```

---

# Status Project
Project saat ini sudah berhasil membangun collaborative document editor sederhana berbasis Laravel dengan authentication, CRUD document, share link collaboration, live user presence, version history, dan conflict detection.
---

# Repository GitHub
https://github.com/azmiakbar/project2_google-docs
