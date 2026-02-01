# Evaluación Técnica – Practicante WordPress

Este proyecto corresponde a la evaluación técnica para el puesto de **Practicante WordPress**.  
El objetivo de esta evaluación es demostrar bases técnicas en WordPress, capacidad de aprendizaje, orden en el desarrollo y seguimiento de instrucciones.

---

## 1. Cómo levantar el proyecto

El proyecto utiliza **Docker** para levantar un entorno local con WordPress y MySQL.

### Requisitos
- Docker
- Docker Compose

### Pasos para levantar el proyecto

1. Clonar el repositorio:
```bash
git clone https://github.com/tu-usuario/practicante-wordpress.git
```

2. Acceder a la carpeta del proyecto:
```bash
cd practicante-wordpress
```
3. Abrir docker desktop

4. Ubicarnos en nuestra carpeta descargada

5. Levantar los contenedores:
```bash
docker compose up -d
```

6. Abrir el proyecto en el navegador:
```text
http://localhost:8000
```

---

## 2. Breve explicación de la estructura

```text
.
├── docker-compose.yml
├── README.md
└── theme
    └── practicante-theme
        ├── style.css
        ├── functions.php
        ├── index.php
        ├── header.php
        ├── footer.php
        ├── page-hero.php
        └── widget-cta.php
```

### Descripción
- **docker-compose.yml**: Archivo de configuración para levantar WordPress y MySQL mediante Docker.
- **style.css**: Información principal del theme y estilos base.
- **functions.php**: Registro del menú principal, widgets y soporte del theme.
- **index.php**: Template principal del theme.
- **header.php / footer.php**: Estructura base del sitio (cabecera y pie de página).
- **page-hero.php**: Template personalizado que incluye una sección tipo Hero y el uso del widget creado.
- **widget-cta.php**: Define un widget personalizado de llamada a la acción (CTA) que permite configurar título, texto y enlace desde el panel de administración y mostrarlo en el frontend.

---

## 3. Qué aprendí realizando la evaluación

Durante la realización de esta evaluación aprendí:
- La estructura básica de un theme en WordPress.
- El uso del Loop de WordPress para mostrar contenido.
- Registro de menús y widgets personalizados.
- Creación de templates de página personalizados.

---

## 4. Qué mejoraría con más tiempo

Con más tiempo disponible me gustaría:
- Mejorar el diseño visual del theme utilizando CSS o tailwindCSS.
- Agregar más templates personalizados.
- saber sobre seguridad

---

## 5. Video explicativo

Video corto donde se explica:
- La estructura del proyecto.
- El funcionamiento del theme.
- El widget y el template personalizado.
- Cómo levantar el proyecto utilizando Docker.

```text
https://youtu.be/mpGekbxrli4
```

---

## Autor

Ángel Mejía
