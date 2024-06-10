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

## Para saber los nombres de los contenedores

```bash
docker ps
```

## En que puerto puedo acceder?

Si no has cambiado nada de los puertos, estos deberian de funcionar. - Alexander
```bash
http://127.0.0.1:8001
http://127.0.0.1:8002
http://127.0.0.1:8003
```


## Si ocupas correr NPM

```bash
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.5/install.sh | bash
nvm install node
```
