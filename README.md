# Real-Time Collaborative Document Editor

## Deskripsi Project
Project ini adalah aplikasi collaborative realtime document editor berbasis web menggunakan Laravel. Aplikasi ini dibuat menyerupai konsep dasar Google Docs, dimana banyak user dapat membuat, membuka, mengedit, dan mengupdate dokumen secara realtime tanpa refresh halaman.

Project ini mendukung authentication, multi-user editing, realtime collaboration, typing tracking, version history, conflict resolution, rich text editor, dan multi-device access menggunakan Laravel Reverb dan WebSocket.

---

# Fitur Utama

## Authentication
- Register User
- Login User
- Logout User

---

## Document Management
- Create Document
- Read / Open Document
- Update Document
- Delete Document
- Share Link Document

---

## Collaboration
- Multi-user Editing
- Multi-device Access
- Realtime Document Update
- Realtime Title Update
- Realtime Typing Tracking
- Live Activity Tracking
- Live User Presence
- Collaborative Realtime Editing

---

## Versioning & Conflict Resolution
- Version History
- Menyimpan Isi Lama Dokumen
- Conflict Detection
- Warning ketika dokumen sudah diubah user lain

---

## Rich Text Editor
- CKEditor 5
- Bold Text
- Italic Text
- Heading
- Bullet List
- Toolbar Formatting

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
- WebSocket

---

# Progress Project

- [x] Setup Laravel Project
- [x] Authentication User
- [x] CRUD Document
- [x] Share Link Collaboration
- [x] Multi-device Access
- [x] Multi-user Editing
- [x] Realtime Document Update
- [x] Realtime Title Update
- [x] Realtime Typing Tracking
- [x] Live Activity Tracking
- [x] Live User Presence
- [x] Version History
- [x] Conflict Resolution
- [x] Rich Text Editor
- [x] CKEditor Integration
- [x] Collaborative Realtime Editing
- [x] Dashboard UI Sederhana
- [x] Open Document UI Sederhana

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
- UserTyping.php

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

---

## 2. Masuk ke Folder Project
```bash
cd project2_google-docs
```

---

## 3. Install Dependency
```bash
composer install
npm install
```

---

## 4. Jalankan Migration
```bash
php artisan migrate
```

---

## 5. Jalankan Laravel Server
```bash
php artisan serve --host=0.0.0.0 --port=8001
```

---

## 6. Jalankan Laravel Reverb
```bash
php artisan reverb:start --host=0.0.0.0 --port=8080
```

---

## 7. Jalankan Vite
```bash
npm run dev
```

---

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

---

## Buka dari Device Lain
```text
http://IP-LAPTOP:8001
```

Contoh:
```text
http://192.168.100.118:8001
```

---

# Cara Kerja Realtime

## User Mengedit Dokumen
User melakukan perubahan pada judul atau isi dokumen.

↓

## Event Broadcast
Laravel mengirim event realtime menggunakan Laravel Reverb dan WebSocket.

↓

## User Lain Menerima Event
Laravel Echo menerima event realtime di browser user lain.

↓

## Dokumen Langsung Berubah
Isi document, title, dan typing tracking langsung berubah tanpa refresh halaman.

---

# Status Project
Project saat ini sudah berhasil membangun collaborative realtime document editor sederhana menggunakan Laravel dengan fitur multi-user editing, realtime synchronization, realtime typing tracking, version history, conflict resolution, live activity tracking, dan rich text editor menggunakan Laravel Reverb dan WebSocket.

---

# Repository GitHub
https://github.com/azmiakbar/project2_google-docs