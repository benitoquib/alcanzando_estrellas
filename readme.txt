//Agregar la carpeta vendor
composer update
//Crear el archivo .env y copiar el example con los datos de la bd
//Generar la llave en artisan
php artisan key:generate.
//Borrar configuraciones anteriores
php artisan config:clear,
//Borrar Cache
php artisan config:cache

-----> Codigos nucleares que te salvaran la vida :v

//Conexión a la base de datos actual

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_dashboard_3
DB_USERNAME=root
DB_PASSWORD=

