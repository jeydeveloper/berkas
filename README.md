# berkas
Lokasi Berkas

# referensi log
- https://github.com/RachidLaasri/LaravelInstaller (installer plugin) (1)
- https://laravel-news.com/laravel-5-4-key-too-long-error (2)
- https://laracasts.com/discuss/channels/general-discussion/any-ideas-how-to-make-web-installation-script-for-laravel-5-application?page=1 (3)
- https://laravel.com/docs/5.6/authentication (4)
- https://github.com/spatie/laravel-permission (5)
- https://github.com/caleboki/acl (6)
- https://scotch.io/tutorials/user-authorization-in-laravel-54-with-spatie-laravel-permission (7)

# langkah-langkah instalasi
- composer install (terminal di root)
- Buat database baru, misal: "berkas"
- Update file "app/Providers/AppServiceProvider.app" (referensi log point (2))
- Buka "http://yourdomain/install", ikuti langkah-langkahnya (dia akan buat file baru "storage/installed", bila ingin mengulangi instalasi dikarenakan terjadi error, hapus file baru tersebut)  (referensi log point (1))
- php artisan migrate (terminal di root)