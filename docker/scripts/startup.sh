#!/bin/bash
set -xe

start(){
  composer install
  chown -R www-data:www-data /var/www/
}

# start supervisord
start
