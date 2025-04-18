# 👩🏽‍💻 Proyecto Laravel - Consultas SQL con Query Builder y Eloquent

Este proyecto forma parte de la actividad de práctica de consultas SQL usando Laravel. A lo largo de este ejercicio, se trabajan migraciones, seeders, consultas SQL y relaciones entre tablas utilizando **Query Builder y Eloquent ORM**.


---

## 🛠️ Tecnologías utilizadas
Este proyecto está desarrollado con las siguientes tecnologías
- **Laravel 12.x** - Laravel 12.x - Framework PHP potente y flexible.
- **PHP 8+** - Lenguaje de programación interpretado.
- **MySQL (MariaDB via XAMPP)** - Sistema de gestión de bases de datos.
- **Query Builder** - Interfaz fluida para construir consultas SQL sin escribir SQL puro.
- **Eloquent ORM** - Sistema de mapeo objeto-relacional (ORM) de Laravel.

---

## 🔗 Rutas de prueba

Puedes ejecutar distintas consultas accediendo a las siguientes rutas:

| Consulta | Descripción | URL |
|---------|-------------|-----|
| 1 | Pedidos del usuario con ID 2 | `/consulta1` |
| 2 | Pedidos con nombre y correo del usuario | `/consulta2` |
| 3 | Pedidos entre $100 y $250 | `/consulta3` |
| 4 | Usuarios con nombres que comienzan con "R" | `/consulta4` |
| 5 | Total de pedidos del usuario con ID 5 | `/consulta5` |
| 6 | Pedidos ordenados por total DESC | `/consulta6` |
| 7 | Suma total de los pedidos | `/consulta7` |
| 8 | Pedido más barato con nombre del usuario | `/consulta8` |
| 9 | Listado de pedidos con detalles por usuario | `/consulta9` |
| 10 | Pedidos agrupados por usuario con sumatorias | `/consulta10` |
| BONUS | Consulta 1 con Eloquent | `/consulta1-eloquent` |

---

## 🗄️ Estructura del proyecto

- 📁 `app/Models/` → Modelos de Usuario y Pedido con relaciones (`hasMany`, `belongsTo`)
- 📁 `app/Http/Controllers/ConsultaController.php` → Todas las consultas con comentarios
- 📁 `database/migrations/` → Migraciones para las tablas
- 📁 `database/seeders/` → Seeders con datos de prueba
- 🔧 `.env` → Configuración de base de datos (`actividad_laravel`)

---

## 🚀 Cómo ejecutar el proyecto

1. Clona el repositorio:
   ```bash
   git clone https://github.com/usuario/actividad-laravel.git
2. Accede al directorio del proyecto:
   ```bash
   cd actividad-laravel  
3. Instala dependencias:
   ```bash
   composer install
4. Configura el archivo `.env` con tus credenciales de base de datos.
5. Ejecuta las migraciones:
   ```bash
   php artisan migrate
6. Ejecuta los seeders para poblar la base de datos:
   ```bash
   php artisan db:seed  
5. Levanta el servidor local:
   ```bash
   php artisan serve  
