#!/bin/bash

# Verifica se o arquivo .env existe
if [ ! -f .env ]; then
    echo "Copiando o arquivo .env.example para .env..."
    cp .env.example .env
else
    echo ".env já existe, pulando a cópia..."
fi

# Instalando as dependências do Composer
echo "Instalando dependências do Composer..."
composer install

# Gerando a chave da aplicação
echo "Gerando a chave da aplicação..."
php artisan key:generate

# Instalando sail
echo "Instalando sail..."
php artisan sail:install

# Subindo containers
echo "Subindo containers da aplicação..."
./vendor/bin/sail up -d

# Rodando as migrações do banco de dados
echo "Rodando as migrações do banco de dados..."
./vendor/bin/sail php artisan migrate:fresh --seed

# Instalando as dependências do NPM
echo "Instalando dependências do NPM..."
./vendor/bin/sail npm install

# Compilando os assets
echo "Compilando os assets com o Vite..."
./vendor/bin/sail npm run dev
