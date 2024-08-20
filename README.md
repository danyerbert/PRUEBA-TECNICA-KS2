Instrucciones para levantar la aplicación.
# Clonar el proyecto
git clone https://github.com/danyerbert/PRUEBA-TECNICA-KS2 PRUEBA TECNICA KS2

# Navegar al directorio del proyecto
cd mi-proyecto

# Instalar las dependencias
composer install

# Copiar el archivo .env.example
cp .env.example .env

# Crear las tablas de la base de datos
php artisan migrate

# Iniciar el servidor de desarrollo
php artisan serve