#!/bin/sh

#
# 初期設定用Shell
# データベース名変数
database_name=UNILORNHOMEPAGE
#




composer install

echo "====================================================="
echo "ENVを更新しますか？(Y/N)"
read envans
echo "====================================================="

if [ $envans = Y ]; then

    cp .env.example .env

    echo "====================================================="
    echo "DatabaseNameを${database_name}として.envを更新します"
    sed -i -e 's/DB_DATABASE=homestead/DB_DATABASE='${database_name}'/' .env

    echo "====================================================="
    echo "DBのユーザ名を入力"
    read username

    echo "====================================================="
    echo "DBのパスワードを入力"
    read userpass

    sed -i -e 's/DB_USERNAME=homestead/DB_USERNAME='$username'/' .env
    sed -i -e 's/DB_PASSWORD=secret/DB_PASSWORD='$userpass'/' .env

    echo "====================================================="
    echo "!! key:generate !!"
    echo "====================================================="
    php artisan key:generate
fi

echo "====================================================="
echo "${database_name} を一度作成しましたか？(Y/N)"
read ans
echo "====================================================="

if [ $ans = N ]; then

    echo "====================================================="
    echo "Database[${database_name}] Create Now!"
    echo "mySQLのパスワードを入力"
    echo "====================================================="

	mysql -u root -p -e 'create database '${database_name}
	echo "====================================================="

	echo "[${database_name}] Dump file write"
    echo "mySQLのパスワードを入力"
    echo "====================================================="

else
    echo "====================================================="
    echo "[${database_name}] Dump file write"
    echo "mySQLのパスワードを入力"
    echo "====================================================="
    mysql -u root -p -e 'drop database `'${database_name}'`;create database `'${database_name}'`'
fi

#php artisan migrate
#php artisan db:seed