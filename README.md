# Proyecto de Pico y Placa
El proyecto fue desarrollado en el siguiente entorno:
- Lenguaje PHP
- Framework Laravel
- Livewire 
- Filament
- Tailwindcss.

Escogi este entorno de desarrollo en el cual he utilizado para crear algunos proyectos que tengo en mi portafolio, porque brinda funcionalidades y la infraestructura para crear proyectos escalables. Utilize el modelo MVC para gestionar el proyecto.
## Ejecutar proyecto

1. Se debe duplicar el archivo .env.example.
2. Luego cambiamos el nombre por **.env**.
3. Se debe configurar en el archivo **.env** especialmente en las configuraciones de la base de datos.
4. En la terminal se debe ejecutar el siguiente comando `composer install`
5. En la terminal se debe ejecutar el siguiente comando `php artisan key:generate` el cual creara la key de proyecto.
6. A continuación realizaremos la creación y migración de la base de datos, a la configuración que fue definida en el anterior proceso
7. El comando para realizar la migracion es el siguiente: `php artisan migrate --seed `
8. También se debe instalar los paquete npm install a traves de la terminal del proyecto 
9. Ejecutamos el proyecto con el comando `npm run dev` como tambien el `php artisan serve`

## El proyecto esta separado en dos partes 
- La parte en donde se crean,edita o eliminan los registros del pico y placa esta en la ruta siguente: **http://127.0.0.1:8000/admin/horarios**

    1. El usuario para acceder al sistema:
    email: `admin@gmail.com` y  contraseña: `12345678`

- Y el formulario en el cual se puede consultar si su placa puede ciruclar se lo realiza **http://127.0.0.1:8000**