# Real-Time Collaborative Document Editor (Google Docs)

## Deskripsi Project
Project ini merupakan aplikasi collaborative document editor berbasis web yang dibuat menyerupai Google Docs. Aplikasi ini memungkinkan beberapa pengguna untuk membuat, melihat, mengedit, dan menghapus dokumen secara bersamaan.

Pada progress saat ini, project sudah memiliki sistem authentication user menggunakan Laravel Breeze serta fitur CRUD (Create, Read, Update, Delete) document yang terhubung langsung ke database SQLite.

## Fitur yang Sudah Dibuat
- Login User
- Register User
- Logout User
- Dashboard User
- Create Document
- Read Document
- Update Document
- Delete Document
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
- [ ] Realtime Collaborative Editor
- [ ] WebSocket Integration
- [ ] Live Cursor Tracking
- [ ] Version History
- [ ] Conflict Resolution

## Cara Menjalankan Project

### 1. Jalankan Laravel Server
```bash
php artisan serve
```

### 2.Jalankan Vite
Buka terminal baru lalu jalankan:

```bash
npm run dev
```

### 3. Buka Browser
```text
http://127.0.0.1:8000/documents
```

## Status Project
Project saat ini sudah menyelesaikan authentication user dan fitur CRUD document. Tahap berikutnya adalah membangun fitur realtime collaborative editing agar beberapa user dapat mengedit document secara bersamaan seperti Google Docs.

## Repository GitHub
https://github.com/azmiakbar/project2_google-docs
