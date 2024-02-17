<h1>Instalasi</h1>

Clone Repo ini

      git clone https://github.com/Yasser021/assets-34-ukk.git
  
Pindah Direktori

      cd assets-34-ukk
  
Install depedensi

      composer install
  
Salin file .env.example

      cp .env.example .env
  
Buat database dan hubungkan di file .env

      DB_DATABASE=ukk
  
Jalankan migrasi

      php artisan migrate --seed
      atau 
      php artisan migrate:fresh --seed
  
Jalankan server

      php artisan key:generate
      php artisan serve
