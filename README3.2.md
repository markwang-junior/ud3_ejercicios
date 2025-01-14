# UD3 Ejercicios - Laravel

## Way of working

### Requisitos tecnológicos

Para trabajar en este proyecto, asegúrate de tener los siguientes requisitos instalados en tu sistema:

- **PHP** (versión 8.0 o superior): Necesario para ejecutar Laravel.
- **Composer**: Gestor de dependencias de PHP.
- **MySQL**: Base de datos utilizada en el proyecto.
- **Git**: Para el control de versiones y clonar el repositorio.
- **Postman**: Para probar los endpoints de la API.
- **Docker** (opcional): Para contenedores y entornos virtualizados.
- **Node.js** (opcional): Para gestionar dependencias de front-end si utilizas Vue.js, React, etc.

---

### Pasos para configurar el proyecto

1. **Clonar el repositorio desde GitHub**  
   Abre tu terminal y ejecuta:
   ```bash
   git clone https://github.com/tu_usuario/ud3_ejercicios.git
Acceder al directorio del proyecto
Navega hasta la carpeta del proyecto clonado:

cd ud3_ejercicios
Copiar el archivo .env.example a .env
Este archivo contiene la configuración de tu entorno. Crea el archivo .env con:


cp .env.example .env
Luego, edita el archivo .env para configurar las credenciales de la base de datos. Por ejemplo:

dotenv

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestion_notas
DB_USERNAME=root
DB_PASSWORD=m1_s3cr3t
Instalar las dependencias del proyecto
Asegúrate de que Composer esté instalado y ejecuta:


composer install
Generar la clave de la aplicación
Laravel necesita una clave única para su aplicación. Genera esta clave con:

php artisan key:generate
Configurar la base de datos

Asegúrate de que MySQL está corriendo.
Ejecuta las migraciones para crear las tablas necesarias:

php artisan migrate
Si deseas datos de prueba, ejecuta los seeders:

php artisan db:seed
Iniciar el servidor de desarrollo
Inicia el servidor de Laravel con:

php artisan serve
Esto abrirá el proyecto en la dirección:

http://127.0.0.1:8000
Probar los endpoints con Postman

Importa la colección postman_collection.json desde la raíz del proyecto en Postman.
Realiza pruebas de los endpoints definidos en las rutas API (/api/alumnos, /api/notas, /api/asignaturas).
