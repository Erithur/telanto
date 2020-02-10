# Instalación

Para poner en marcha la aplicación lo primero que tendremos que hacer sera instalar el vendor a través de composer. Para ello abrimos una terminal en la raíz del proyecto y ejecutamos el siguiente comando.

> composer install

El siguiente paso es crear la base de datos, para ello debemos ejecutar el siguiente comando en la misma terminal

> touch database/database.sqlite

Una vez ya la tengamos, debemos lanzar las migraciones para poder crear las tablas en la base de datos, para ello debemos lanzar el siguiente comando.

> php artisan migrate

Al llegar a este punto ya tenemos la base de datos lista para funcionar, así que el siguiente paso sera llenarla de datos. Dentro de la aplicación hay un [schedule](https://laravel.com/docs/6.x/scheduling) preparado para hacer una importación diaria de datos. Para activar la importación manualmente debemos lanzar el siguiente comando.

> php artisan db:seed

Ahora la base de datos ya esta rellenada con usuarios y tareas a realizar.
Para que la importación sea diaria, en el servidor hay que dar de alta un cron que lance el comando que pondré a continuación para que cada media noche haga la descarga de datos.

> php artisan schedule:run
