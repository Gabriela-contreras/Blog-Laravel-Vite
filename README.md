

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

*Un blog moderno dedicado al mundo del diseño de espacios y arquitectura contemporánea*

[Demo](#) • [Documentación](#instalación) • [Contribuir](#contribuir)

</div>

---

## 🌟 Sobre el Proyecto

**SpaceDesign Blog** es una plataforma digital especializada en **diseño de espacios y arquitectura moderna**. Nuestro objetivo es inspirar y educar a través de contenido de alta calidad sobre:

- 🏠 **Arquitectura Residencial**: Casas modernas, minimalistas y sostenibles
- 🏢 **Espacios Comerciales**: Oficinas, restaurantes y tiendas innovadoras  
- 🌿 **Diseño Biofílico**: Integración de naturaleza en arquitectura
- 🎨 **Interiores Contemporáneos**: Tendencias en decoración y mobiliario
- 🌍 **Arquitectura Sostenible**: Construcciones eco-friendly y eficientes


## 🛠️ Tecnologías Utilizadas

### Backend
- **[Laravel 10](https://laravel.com/)** - Framework PHP moderno y elegante
- **[PHP 8.2+](https://php.net/)** - Lenguaje de programación server-side
- **MySQL Cloud** - Base de datos relacional en la nube

### Frontend  
- **[TailwindCSS](https://tailwindcss.com/)** - Framework CSS utility-first
- **[Vite](https://vitejs.dev/)** - Build tool ultrarrápido
- **Blade Templates** - Motor de plantillas de Laravel

### Base de Datos
- **[Railway ]**
Se implementó Railway, una plataforma en la nube que permite gestionar bases de datos de forma remota. En este proyecto se usó PostgreSQL provisto por Railway, lo que facilitó el acceso desde cualquier entorno de desarrollo sin necesidad de instalaciones locales.


## 🚀 Instalación

### Prerrequisitos

Asegúrate de tener instalado:

- **PHP >= 8.2**
- **Laravel** 
- **Composer**
- **Node.js >= 18**
- **npm** o **yarn**

### 1️⃣ Clonar el Repositorio

```bash
git clone https://github.com/Gabriela-contreras/Blog-Laravel-Vite
cd spacedesign-blog
```

### 2️⃣ Instalar Dependencias PHP

```bash
composer install
```

### 3️⃣ Instalar Dependencias JavaScript
```bash
# Copiar archivo de configuración
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate
```


### 4️⃣ Configurar Variables de Entorno
Para esta parte ya tener elegida base de datos y creada una tabla. 
Edita el archivo `.env` con tus credenciales de base de datos en la nube:

```env
DB_CONNECTION=mysql
DB_HOST=tu-host-de-base-de-datos.com
DB_PORT=3306
DB_DATABASE=spacedesign_blog
DB_USERNAME=tu-usuario
DB_PASSWORD=tu-contraseña
```


### 5️⃣ Configurar Base de Datos
```bash
# Crear tablas en la base de datos
php artisan migrate

# Poblar con datos de ejemplo (opcional)
php artisan db:seed
```
### 6️⃣ Ejecutar Migraciones

```bash
# Para desarrollo
npm run dev

# Para producción
npm run build
```

### 7️⃣ Compilar Assets

```bash
php artisan serve
```

🎉 **¡Listo!** Tu blog estará disponible en `http://localhost:8000`

---

## 📁 Estructura del Proyecto

```
spacedesign-blog/
├── 📂 app/
│   ├── 📂 Http/Controllers/     # Controladores
│   ├── 📂 Models/               # Modelos Eloquent
│   └── 📂 Services/             # Lógica de negocio
├── 📂 database/
│   ├── 📂 migrations/           # Migraciones de BD
│   └── 📂 seeders/              # Datos de prueba
├── 📂 resources/
│   ├── 📂 views/                # Plantillas Blade
│   ├── 📂 css/                  # Estilos TailwindCSS
│   └── 📂 js/                   # JavaScript
├── 📂 routes/
│   └── web.php                  # Rutas web
├── 📂 public/                   # Assets públicos
└── 📄 vite.config.js            # Configuración Vite
```

---

## 🌐 Configuración de Base de Datos en la Nube

Este proyecto utiliza una **base de datos Railway hospedada en la nube** para garantizar:

- ✅ **Alta disponibilidad** 24/7
- ✅ **Escalabilidad automática**
- ✅ **Backups automáticos**
- ✅ **Seguridad avanzada**


## 📚 Comandos Útiles

```bash
# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Generar nuevo controlador
php artisan make:controller PostController

# Crear migración
php artisan make:migration create_posts_table

# Ejecutar tests
php artisan test

# Modo de desarrollo con hot reload
npm run dev
```

---

## 🤝 Contribuir

¡Las contribuciones son bienvenidas! Por favor:

1. 🍴 Fork el proyecto
2. 🌱 Crea una rama para tu feature (`git checkout -b feature/nueva-funcionalidad`)
3. 💾 Commit tus cambios (`git commit -m 'Agregar nueva funcionalidad'`)
4. 📤 Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. 🔄 Abre un Pull Request


## 👥 Autores

**Gabriela Contreras**
- GitHub: (https://github.com/Gabriela-contreras)
- LinkedIn: https://www.linkedin.com/in/gabriela-contreras-837193278/
- Email : gcontreras8522@gmail.com


**Katherine Contreras**
- GitHub: https://github.com/katherine-j-c-s
- Email : gcontreras8522@gmail.com


<div align="center">

**⭐ Si te gusta este proyecto, no olvides darle una estrella ⭐**

*Hecho con ❤️ para la comunidad de diseño y arquitectura*

</div>
