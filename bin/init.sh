#!/bin/bash

DIR=$(pwd)
MAIN_DIR=$1
MODE=$2
REL_DIR=${DIR:${#MAIN_DIR}+1}

case $MODE in
1)
    composer install
    ;;
2)
    cd $MAIN_DIR
    php artisan migrate --force --path=$REL_DIR/database/migrations
    ;;
esac

cd $DIR
