## Laravel PHP Framework (v5.1)
## AngularJS Framework (v1.6)

1) Clonar repositorio.
2) Ir a la carpeta del repositorio y correr el comando "composer install" (Se debe tener instalado Composer).
3) Crear el archivo .env (Copiar y pegar lo que esta en el archivo .env.example).
4) Crear la base de datos y editar en el archivo .env 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD'.
4) Correr el comando "php artisan key:generate" (Se crea la llave de la aplicacion y automaticamente la imprime en .env 'APP_KEY').
5) Correr el comando "php artisan migrate" (Esto crea las tablas dentro de la base de datos).
6) Correr el comando "php artisan serve" (Por defecto servira la web en 'http://localhost:8000', en caso de que esta ruta sea cambiada para servirla en otro puerto o ruta, se debe editar la variable 'APP_URL' en el archivo .env).
