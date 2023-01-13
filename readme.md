# Car Rental

Este proyecto se trata de un concesionario que ofrece servicios de alquiler y venta de coches de gama alta.
A nivel de usuario, se pueden hacer login, register, lo que nos permite habilitar los servicios de coches. Una vez se complete un servicio, se creará una orden para el día específicado y este la podrá consultar en su perfil en la sección de orders. De otro modo, no se podrá reservar un coche en un mismo día, ya que se realiza la validación correspondiente.

Respectivamente, en cuanto a usuario administrador, este tiene un panel de administración CRUD y podrá realizar las mismas funciones que el cliente.

Finalmente, si un coche se vende, este deja de aparecer en la lista de coches para alquilar.

## Guía de instalación
1. Instalar Laragon con PHP 8.0.
2. Importar base de datos de este repositorio (car_rental.php).
3. Mover el código a la carpeta laragon/www/ .
4. Crear .htacces en la raíz del proyecto copiando el código de abajo
5. Iniciar proyecto

### Apache

```
    <IfModule mod_rewrite.c>
    # Activar rewrite
    RewriteEngine on
    ErrorDocument 404 http://localhost/error/

    RewriteCond %{SCRIPT_FILENAME} !-d
    RewriteCond %{SCRIPT_FILENAME} !-f

    RewriteRule ^(.*)/(.*) index.php?controller=$1&action=$2
    </IfModule>
```

### Usuarios
- email: admin@admin.es password: 11111111
- email: cliente@cliente.es password: 12345678ABC

## Tecnologías
1. PHP Vanilla
2. MySQL
3. HTML5
4. CSS3
5. Apache