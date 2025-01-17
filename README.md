# Laravel Project Setup with API Endpoint Consumption

Este proyecto es una API de Locations construida con Laravel. En este proyecto, se consume un endpoint llamado `locations`. A continuación se detallan los pasos para inicializar el proyecto de Laravel y configurarlo para consumir el endpoint.

## Requisitos

- PHP 8.2
- Composer
- SQLite
- Laravel >= 11.31

## Pasos para Inicializar el Proyecto

### 1. Clonar el Repositorio

Si aún no has clonado el repositorio del proyecto, clónalo utilizando el siguiente comando:

```bash
git clone --branch develop --single-branch https://github.com/Ariaz39/backend_joonik.git
```
### 2. Ingresar a la carpeta del proyecto

```bash
cd backend_joonik
```
### 3. Instalar las dependencias del proyecto

```bash
composer install
```
### 4. Crear el archivo `.env`

```bash
cp .env.example .env
```
### 5. agregar la siguiente linea en el archivo `.env` en el final del archivo

```bash
API_KEY=e306562f-a827-46d7-bd6f-6fce54cdee0b 
```
### 6. Generar la clave de la aplicación

```bash
php artisan key:generate
```
### 7. Migrar la base de datos con los seeders

```bash
php artisan migrate --seed
```
### 8. Iniciar el servidor

```bash
php artisan serve
```
### 9. Continuar con la instalacion del frontend
