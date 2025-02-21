# Proyecto de Pico y Placa
El proyecto fue desarrollado en el siguiente entorno:
- Lenguaje PHP
- Framework Laravel
- Livewire 
- Filament
- Tailwindcss.

Escogí este entorno de desarrollo en el cual he utilizado para crear algunos proyectos que tengo en mi portafolio, porque brinda funcionalidades y la infraestructura para crear proyectos escalables. Utilicé el modelo MVC para gestionar el proyecto.

## Ejecutar proyecto

1. Se debe duplicar el archivo .env.example.
2. Luego cambiamos el nombre por **.env**.
3. Se debe configurar en el archivo **.env** especialmente en las configuraciones de la base de datos.
4. En la terminal se debe ejecutar el siguiente comando `composer install`.
5. En la terminal se debe ejecutar el siguiente comando `php artisan key:generate`, el cual creará la key del proyecto.
6. A continuación realizaremos la creación y migración de la base de datos, según la configuración que se definió en el proceso anterior.
7. El comando para realizar la migración es el siguiente: `php artisan migrate --seed`.
8. También se deben instalar los paquetes usando `npm install` a través de la terminal del proyecto.
9. Ejecutamos el proyecto con el comando `npm run dev`, como también el `php artisan serve`.

## El proyecto está separado en dos partes 
- La parte en donde se crean, editan o eliminan los registros del pico y placa está en la ruta siguiente: **http://127.0.0.1:8000/admin/horarios**.

    1. El usuario para acceder al sistema:
    email: `admin@gmail.com` y contraseña: `12345678`.

- Y el formulario en el cual se puede consultar si su placa puede circular se realiza en **http://127.0.0.1:8000**.
