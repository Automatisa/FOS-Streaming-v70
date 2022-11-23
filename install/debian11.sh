#!/bin/bash
apt-get update -y; apt-get upgrade -y; apt-get dist-upgrade -y; apt-get autoremove -y
apt-get install build-essential libssl-dev curl nano wget zip unzip git lsof iftop htop vim ffmpeg -y
apt-get install -y ca-certificates apt-transport-https lsb-release 

apt-get install -y man-db make m4 netcat-openbsd odbcinst1debian2 patch
apt-get install -y pkg-config python2 python2-minimal python2.7 python2.7-minimal re2c unixodbc unixodbc-dev
apt-get install -y uuid-dev x11-common x11proto-core-dev x11proto-input-dev x11proto-kb-dev libgeoip-dev 
apt-get install -y po-debconf xorg-sgml-doctools xtrans-dev zlib1g-dev libjpeg-dev libgcc1 libgd-dev libpcre++-dev libxslt1-dev

apt-get install -y libgtk2.0-0 libgdk-pixbuf2.0-0 libfontconfig1 libxrender1 libx11-6 libglib2.0-0  libxft2 libfreetype6 libc6 zlib1g libpng-dev

wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
apt update

apt install -y php8.0 php8.0-cgi php8.0-bcmath php8.0-bz2 php8.0-cli php8.0-common php8.0-curl php8.0-dba php8.0-dev php8.0-enchant php8.0-fpm php8.0-gd php8.0-gmp php8.0-imap php8.0-interbase php8.0-intl php8.0-ldap php8.0-mbstring php8.0-mysql php8.0-odbc php8.0-opcache php8.0-pgsql php8.0-phpdbg php8.0-pspell php8.0-readline  php8.0-snmp php8.0-soap php8.0-sqlite3 php8.0-sybase php8.0-tidy php8.0-xml php8.0-xmlrpc php8.0-xsl php8.0-zip

ex -sc '%s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g|x' /etc/php/8.0/fpm/php.ini
ex -sc '%s/output_buffering = 4096/output_buffering = Off/g|x' /etc/php/8.0/fpm/php.ini
perl -pi -e 's/error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT/error_reporting = E_ALL/g' /etc/php/8.0/fpm/php.ini
perl -pi -e 's/;error_log = syslog/error_log = php_error.log/g' /etc/php/8.0/fpm/php.ini
perl -pi -e 's/;date.timezone =/date.timezone = UTC/g' /etc/php/8.0/fpm/php.ini

service php8.0-fpm restart
apt-get autoremove -y
useradd nginx
useradd -s /sbin/nologin -U -d /home/fos-streaming -m fosstreaming

cd /tmp
git clone --recurse-submodules https://github.com/Automatisa/FOS-Streaming-v70.git
cp -a fospackv69/fos /home/fos-streaming/
cd fospackv69/nginx-builder
bash build.sh
cd /tmp
rm -rf fospackv69





rm -rf /home/fos-streaming/fos/www/vendor /home/fos-streaming/fos/www/50x.html
cd /home/fos-streaming/fos/www
git clone https://github.com/Automatisa/FOS-Streaming-v70.git .

chown -R nginx:nginx /home/fos-streaming/fos/www
chown -R nginx:nginx /home/fos-streaming/fos/www/*

echo 'nginx ALL = (root) NOPASSWD: /usr/bin/ffmpeg' >> /etc/sudoers
echo 'nginx ALL = (root) NOPASSWD: /usr/bin/ffprobe' >> /etc/sudoers
sed --in-place '/exit 0/d' /etc/rc.local
echo '/home/fos-streaming/fos/nginx/sbin/nginx_fos' >> /etc/rc.local
echo '/etc/init.d/php8.0-fpm start' >> /etc/rc.local
echo 'exit 0' >> /etc/rc.local

mkdir -p /home/fos-streaming/fos/www/hl ; chmod -R 777 /home/fos-streaming/fos/www/hl; mkdir -p /home/fos-streaming/fos/www/cache; chmod -R 777 /home/fos-streaming/fos/www/cache; chown nginx:nginx /home/fos-streaming/fos/nginx/conf
curl -s https://raw.githubusercontent.com/Automatisa/fos-streaming-v70/main/improvement/nginx.conf > /home/fos-streaming/fos/nginx/conf/nginx.conf
curl -s https://raw.githubusercontent.com/Automatisa/fos-streaming-v70/main/improvement/php8.0.conf > /etc/php/8.0/fpm/pool.d/www.conf




sqlpasswd=(`cat /root/MYSQL_ROOT_PASSWORD`);



sed -i 's/xxx/fos/g' /home/fos-streaming/fos/www/config.php
sed -i 's/zzz/'$sqlpasswd'/g' /home/fos-streaming/fos/www/config.php
sed -i 's/ttt/fos/g' /home/fos-streaming/fos/www/config.php
mkdir -p /home/fos-streaming/fos/www1/;
mkdir -p /home/fos-streaming/fos/www1/log/;
chown nginx:nginx /home/fos-streaming/fos/www1/log/;
cp -R /home/fos-streaming/fos/www/* /home/fos-streaming/fos/www1/;
rm -rf /home/fos-streaming/fos/www1/*.*

rm -rf /home/fos-streaming/fos/www1/hl
ln -s /home/fos-streaming/fos/www/hl /home/fos-streaming/fos/www1/hl
ln -s /home/fos-streaming/fos/www/config.php /home/fos-streaming/fos/www1/config.php
ln -s /home/fos-streaming/fos/www/functions.php /home/fos-streaming/fos/www1/functions.php
ln -s /home/fos-streaming/fos/www/stream.php /home/fos-streaming/fos/www1/stream.php
ln -s /home/fos-streaming/fos/www/playlist.php /home/fos-streaming/fos/www1/playlist.php
ln -sf /etc/alternatives/php /home/fos-streaming/fos/php/bin/php

service php8.0-fpm stop
service php8.0-fpm start
/home/fos-streaming/fos/nginx/sbin/nginx_fos
curl -s http://127.0.0.1:7777/install_database_tables.php?install
curl -s http://127.0.0.1:7777/install_database_tables.php?update
