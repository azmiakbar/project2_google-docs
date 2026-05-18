# Real-Time Collaborative Document Editor (Google Docs)

## Deskripsi Project
Project ini merupakan aplikasi collaborative document editor berbasis web yang dibuat menggunakan Laravel. Sistem ini dirancang menyerupai konsep dasar Google Docs dimana banyak user dapat membuka, mengedit, dan membagikan document secara online melalui share link.

Project ini mendukung authentication, CRUD document, collaboration system, version history, conflict resolution/detection, activity tracking, dan rich text editor.

---

# Fitur Utama

## Authentication
- Register User
- Login User
- Logout User

## CRUD Document
- Create Document
- Read/Open Document
- Update Document
- Delete Document

## Collaboration Features
- Multi-user Editing Dasar
- Share Link Collaboration
- Multi-device Access
- Live User Presence
- Activity Tracking Sederhana
- Realtime Foundation menggunakan Laravel Reverb

## Versioning & Conflict System
- Version History
- Menyimpan Riwayat Perubahan Document
- Menyimpan Isi Lama Document
- Conflict resolution/Detection
- Warning ketika document sudah diubah user lain

## Rich Text Editor
- CKEditor 5
- Bold Text
- Italic Text
- Heading
- Bullet List
- Toolbar Formatting

## User Interface
- Dashboard Document Sederhana
- Halaman Open Document Lebih Rapi
- Layout Document Sederhana dan Mudah Digunakan

---

# Teknologi yang Digunakan
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

# Progress Project

- [x] Setup Laravel Project
- [x] Install Laravel Breeze
- [x] Authentication
- [x] CRUD Document
- [x] Share Link Collaboration
- [x] Multi-device Access
- [x] Multi-user Editing Dasar
- [x] Live User Presence
- [x] Activity Tracking
- [x] Version History
- [x] Conflict Detection
- [x] Rich Text Editor
- [x] Toolbar Formatting
- [x] Dashboard UI Sederhana
- [x] Open Document UI Sederhana
- [x] Realtime Foundation

---

# Struktur Project

## Models
- Document.php
- DocumentHistory.php
- DocumentPresence.php

## Controllers
- DocumentController.php

## Events
- DocumentUpdated.php

## Views
- documents/index.blade.php
- documents/create.blade.php
- documents/edit.blade.php
- documents/show.blade.php

## Routes
- routes/web.php

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
Project saat ini sudah berhasil membangun collaborative document editor sederhana berbasis Laravel dengan authentication, CRUD document, share link collaboration, live user presence, activity tracking sederhana, version history, conflict detection, rich text editor, dan dashboard sederhana. Sistem realtime collaborative editing penuh masih dalam tahap pengembangan menggunakan Laravel Reverb dan WebSocket.

---

# Repository GitHub
https://github.com/azmiakbar/project2_google-docs