# berkas
Lokasi Berkas

# referensi log
- https://github.com/RachidLaasri/LaravelInstaller (installer plugin) (1)
- https://laravel-news.com/laravel-5-4-key-too-long-error (2)
- https://laracasts.com/discuss/channels/general-discussion/any-ideas-how-to-make-web-installation-script-for-laravel-5-application?page=1 (3)
- https://laravel.com/docs/5.6/authentication (4)

# langkah-langkah instalasi
- composer install (terminal di root)
- composer require rachidlaasri/laravel-installer (terminal di root) (referensi log point (1))
- php artisan vendor:publish --tag=laravelinstaller (terminal di root) (referensi log point (1))
- Buat database baru, misal: "berkas"
- update file "app/Providers/AppServiceProvider.app" (referensi log point (2))
- buka "http://yourdomain/install", ikuti langkah-langkahnya (dia akan buat file baru "storage/installed", bila ingin mengulangi instalasi dikarenakan terjadi error, hapus file baru tersebut)  (referensi log point (1))
- php artisan make:auth (terminal di root) (referensi log point (4))