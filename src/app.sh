#!/bin/sh

# Instalar extensão do MongoDB no PHP
apt-get update && apt-get install -y \
    libssl-dev \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb
