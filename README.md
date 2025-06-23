# AppKit

Laravel dan FilamentPHP v3 kit yang siap digunakan untuk mengelola data dan konten.

## Fitur Utama

- **Admin Panel Modern** - Interface admin yang responsif dan user-friendly menggunakan FilamentPHP v3
- **Autentikasi Aman** - Sistem login dengan username/email dan password
- **Dashboard Interaktif** - Dashboard dengan widget dan notifikasi real-time
- **Manajemen User** - Sistem pengelolaan pengguna dengan role dan permission
- **Responsive Design** - Tampilan yang optimal di semua perangkat
- **Dark Mode Support** - Dukungan tema gelap dan terang

## Teknologi yang Digunakan

- **Laravel 11** - Framework PHP modern dan powerful
- **FilamentPHP v3** - Admin panel builder yang elegan
- **Livewire** - Framework full-stack untuk Laravel
- **Alpine.js** - Framework JavaScript yang ringan
- **Tailwind CSS** - Utility-first CSS framework
- **MySQL** - Database management system

## Instalasi

### Persyaratan Sistem

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL/MariaDB

### Langkah Instalasi

1. Clone repository
```bash
git clone <repository-url>
cd appkit
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di file `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=appkit
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Jalankan migrasi dan seeder
```bash
php artisan migrate --seed
```

6. Build assets
```bash
npm run build
```

7. Jalankan aplikasi
```bash
php artisan serve
```

## Akses Admin Panel

Setelah instalasi selesai, Anda dapat mengakses admin panel di:

```
http://localhost:8000/admin
```

**Default Login:**
- Username: `admin`
- Password: `password`

## Pengembangan

### Menjalankan Development Server

```bash
# Terminal 1 - Laravel Server
php artisan serve

# Terminal 2 - Asset Watcher
npm run dev
```

### Struktur Direktori

```
app/
├── Filament/
│   ├── Pages/          # Custom pages
│   ├── Resources/      # Resource classes
├── Http/
├── Models/
└── Providers/
    └── Filament/       # Panel providers
```

## Kontribusi

Kami menyambut kontribusi dari komunitas! Silakan buat pull request atau laporkan issue jika Anda menemukan bug atau memiliki saran perbaikan.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

## Support

Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan buat issue di repository ini.

---

**AppKit** - Modern Admin Panel Solution
