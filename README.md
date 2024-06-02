# Instrucciones

Antes de ejecutar el proyecto, se debe tener instalado Docker y Docker Compose en el equipo.

## Ejecutar la imagen de Docker

Para ejecutar la imagen de Docker, se debe ejecutar el siguiente comando:

```bash
docker-compose up --build
```

## En cualquiera de los contenedores de Docker con Laravel ejecutar las migraciones

El cluster de mariadb se encargara de sincronizar las bases de datos, por lo que no es necesario ejecutar las migraciones en todos los contenedores de Laravel.

Para ejecutar las migraciones en cualquiera de los contenedores de Laravel, se debe ejecutar el siguiente comando:

```bash
php artisan migrate
```

## Entrar a cada uno de los contendores de Laravel y correr el server

Para entrar a cada uno de los contenedores de Laravel, se debe ejecutar el siguiente comando:

```bash
docker exec -it {idContenedor} bash
```

o
  ```bash
docker exec -it {nombreContenedor} php artisan serve
```

