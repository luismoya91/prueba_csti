Prueba Técnica CSTI - Luis Miguel Moya

Pasos para la instalacion

1. Instalar xampp
2. Instalar PostgreSQL
3. Crear base de datos llamada "latiendaweb" cambiar constraseña a 1234567 (validar .env.example)
4. Instalar composer
5. clonar el repositorio en htdocs git clone git@github.com:luismoya91/prueba_csti.git
6. entrar al repositorio y ejecutar composer install
7. copiar el .env.example a .env
8. ejecutar php artisan migrate
9. iniciar servidor con php artisan server i entrar a http://127.0.0.1:8000/