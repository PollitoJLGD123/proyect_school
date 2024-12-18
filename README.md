# Proyecto School

Este es un proyecto de gestión escolar desarrollado en **PHP** utilizando el framework **Laravel**. La aplicación está diseñada para registrar y gestionar matrículas y notas de estudiantes de manera eficiente.

## Requisitos

Antes de ejecutar la aplicación, asegúrate de tener instalados los siguientes requisitos:

- **PHP 7.4+**
- **Composer**
- **MySQL** (o un servidor de base de datos compatible)

## Instalación

Sigue estos pasos para configurar y ejecutar la aplicación en tu máquina local:

1. **Clona el repositorio** en tu máquina local:

git clone https://github.com/PollitoJLGD123/proyecto_school.git
text

2. **Navega al directorio del proyecto**:

cd proyecto_school
text

3. **Instala las dependencias del proyecto** utilizando Composer:

composer install
text

4. **Copia el archivo de entorno** y renómbralo:

cp .env.example .env
text

5. **Configura tu archivo `.env`**:
- Abre el archivo `.env` en un editor de texto.
- Configura los parámetros de conexión a la base de datos según tu entorno. Por ejemplo:

  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=tu_base
  DB_USERNAME=tu_usuario
  DB_PASSWORD=tu_contraseña
  ```

6. **Genera la clave de la aplicación**:

php artisan key:generate

7. **Ejecuta las migraciones** para crear las tablas necesarias en la base de datos:

php artisan migrate

8. **(Opcional) Carga datos iniciales** si tienes seeders configurados:

php artisan db:seed

9. **Inicia el servidor local** para probar la aplicación:

php artisan serve

10. **Accede a la aplicación** desde tu navegador web en la siguiente dirección:

 ```
 http://localhost:8000
 ```

## Contribuciones

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -m 'Añadir nueva funcionalidad'`).
4. Envía un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT - consulta el archivo [LICENSE](LICENSE) para más detalles.

---

¡Gracias por utilizar el Proyecto School! Si tienes alguna pregunta, no dudes en abrir un issue en GitHub.

