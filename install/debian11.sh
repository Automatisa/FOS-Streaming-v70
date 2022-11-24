#!/bin/bash
apt-get update -y; apt-get upgrade -y; apt-get dist-upgrade -y; apt-get autoremove -y
apt-get install build-essential libssl-dev curl nano wget zip unzip git lsof iftop htop vim ffmpeg -y
apt-get install -y ca-certificates apt-transport-https lsb-release 

apt-get install -y man-db make m4 netcat-openbsd odbcinst1debian2 patch
apt-get install -y pkg-config python2 python2-minimal python2.7 python2.7-minimal re2c unixodbc unixodbc-dev
apt-get install -y uuid-dev x11-common x11proto-core-dev x11proto-input-dev x11proto-kb-dev libgeoip-dev libquadmath0 librecode-dev librecode0 librtmp-dev libsasl2-dev libsasl2-modules
apt-get install -y po-debconf xorg-sgml-doctools xtrans-dev zlib1g-dev libjpeg-dev libgcc1 libgd-dev libpcre++-dev libxslt1-dev

apt-get install -y libgtk2.0-0 libgdk-pixbuf2.0-0 libfontconfig1 libxrender1 libx11-6 libglib2.0-0  libxft2 libfreetype6 libc6 zlib1g libpng-dev

wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
apt update

apt install -y php7.4 php7.4-cgi php7.4-bcmath php7.4-bz2 php7.4-cli php7.4-common php7.4-curl php7.4-dba php7.4-dev php7.4-enchant php7.4-fpm php7.4-gd php7.4-gmp php7.4-imap php7.4-interbase php7.4-intl php7.4-ldap php7.4-mbstring php7.4-mysql php7.4-odbc php7.4-opcache php7.4-pgsql php7.4-phpdbg php7.4-pspell php7.4-readline  php7.4-snmp php7.4-soap php7.4-sqlite3 php7.4-sybase php7.4-tidy php7.4-xml php7.4-xmlrpc php7.4-xsl php7.4-zip

ex -sc '%s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g|x' /etc/php/7.4/fpm/php.ini
ex -sc '%s/output_buffering = 4096/output_buffering = Off/g|x' /etc/php/7.4/fpm/php.ini
perl -pi -e 's/error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT/error_reporting = E_ALL/g' /etc/php/7.4/fpm/php.ini
perl -pi -e 's/;error_log = syslog/error_log = php_error.log/g' /etc/php/7.4/fpm/php.ini
perl -pi -e 's/;date.timezone =/date.timezone = UTC/g' /etc/php/7.4/fpm/php.ini

service php7.4-fpm restart
apt-get autoremove -y
useradd nginx
useradd -s /sbin/nologin -U -d /home/fos-streaming -m fosstreaming

cd /tmp
git clone --recurse-submodules https://github.com/Automatisa/fos-streaming-v70.git
cp -a fos-streaming-v70/install/fospackv70-master/fos /home/fos-streaming/
cd fos-streaming-v70/install/fospackv70-master/nginx-builder
bash build.sh
cd /tmp
rm -rf fos-streaming-v70


rm -rf /home/fos-streaming/fos/www/vendor /home/fos-streaming/fos/www/50x.html
cd /home/fos-streaming/fos/www
git clone https://github.com/Automatisa/FOS-Streaming-v70.git .

chown -R nginx:nginx /home/fos-streaming/fos/www
chown -R nginx:nginx /home/fos-streaming/fos/www/*

echo 'nginx ALL = (root) NOPASSWD: /usr/bin/ffmpeg' >> /etc/sudoers
echo 'nginx ALL = (root) NOPASSWD: /usr/bin/ffprobe' >> /etc/sudoers

mkdir -p /home/fos-streaming/fos/www/hl
chmod -R 777 /home/fos-streaming/fos/www/hl
mkdir -p /home/fos-streaming/fos/www/cache
chmod -R 777 /home/fos-streaming/fos/www/cache
chown nginx:nginx /home/fos-streaming/fos/nginx/conf

curl -s https://raw.githubusercontent.com/Automatisa/fos-streaming-v70/main/improvement/nginx.conf > /home/fos-streaming/fos/nginx/conf/nginx.conf
curl -s https://raw.githubusercontent.com/Automatisa/fos-streaming-v70/main/improvement/php74.conf > /etc/php/7.4/fpm/pool.d/www.conf




sqlpasswd=(`cat /root/MYSQL_ROOT_PASSWORD`);

mysql -u root  -e "CREATE DATABASE fos"
mysql -u root  -e "CREATE USER 'fos'@'localhost' IDENTIFIED BY '$sqlpasswd';"
mysql -u root  -e "GRANT ALL PRIVILEGES ON fos.* TO 'fos'@'localhost';"
mysql -u root  -e "FLUSH PRIVILEGES;"


sed -i 's/xxx/fos/g' /home/fos-streaming/fos/www/config.php
sed -i 's/zzz/'$sqlpasswd'/g' /home/fos-streaming/fos/www/config.php
sed -i 's/ttt/fos/g' /home/fos-streaming/fos/www/config.php
mkdir -p /home/fos-streaming/fos/www1/
mkdir -p /home/fos-streaming/fos/www1/log/
chown nginx:nginx /home/fos-streaming/fos/www1/log/


cp -R /home/fos-streaming/fos/www/* /home/fos-streaming/fos/www1/
rm -rf /home/fos-streaming/fos/www1/*.*

rm -rf /home/fos-streaming/fos/www1/hl
ln -s /home/fos-streaming/fos/www/hl /home/fos-streaming/fos/www1/hl
ln -s /home/fos-streaming/fos/www/config.php /home/fos-streaming/fos/www1/config.php
ln -s /home/fos-streaming/fos/www/functions.php /home/fos-streaming/fos/www1/functions.php
ln -s /home/fos-streaming/fos/www/stream.php /home/fos-streaming/fos/www1/stream.php
ln -s /home/fos-streaming/fos/www/playlist.php /home/fos-streaming/fos/www1/playlist.php
ln -sf /etc/alternatives/php /home/fos-streaming/fos/php/bin/php

service php7.4-fpm stop
service php7.4-fpm start
/home/fos-streaming/fos/nginx/sbin/nginx_fos
curl -s http://127.0.0.1:7777/install_database_tables.php?install
curl -s http://127.0.0.1:7777/install_database_tables.php?install
curl -s http://127.0.0.1:7777/install_database_tables.php?update
