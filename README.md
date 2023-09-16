# Crud de lista de tareas
## Requerimientos
Para el uso de esta aplicacion debemos tener instalado xampp, docker, opcional(mysql Workbench), git y un editor de codigo de nuestro agradao, para pasar con la instalacion debemos tener corriendo los servicios de php y mysql de xampp o el contenedor de mysql de docker.

## Pasos para su instalacion
una vez teniendo los requerimientos procedemos a instalar la aplicacion, abrimos la terminal de git desde nuestro escritorio y ingresamos los siguientes comandos:

```
git clone https://github.com/29layun/Crud.git

```
Localizamos la carpeta descargada en nuestro escritorio y localizaremos la carpeta "backend" para copiarla

```
backend

```
Esta carpeta "backend" la pegaremos en la siguiente ruta y la renombraremos con el siguiente nombre "crud"

```
c:user/xampp/htdocs/

```

Asi quedaria la ruta de la carpeta 
```
c:user/xampp/htdocs/crud

```

## Pasos para la instalacion de base de datos 
Para instalar la base de datos debemos de abrir la carpeta descargada en el escritorio y ubicar el archivo "crud.sql" que se encuentra en la carpeta bd

```
Crud/bd/

```
Nos iremos a la interfaz de phpmyadmin o en casos de usar docker con el contenedor de mysql se debera abrir la interfaz de mysql workbench para importar la base de datos, esperamos que se carge correctamente la base de datos y procederemos a hacer uso de la aplicacion en el navegador de nuestro agrado con el siguiente link "localhost/crud/public".
