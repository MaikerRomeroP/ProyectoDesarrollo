# ProyectoDesarrollo
Proyecto Final Desarrollo de Software
1. Instalar librerias en la carpeta vendor
  composer install
2. Copiar .env.example a .env y configurar la base de datos
3. Generar key de la aplicacion
  php artisan key:generate
4. Crear migrations y seeders
  php artisan migrate --seed
