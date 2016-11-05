<!doctype html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>vps_commands - Important - Prajwal Koirala</title>
 </head>
 <body>
<div id="selectable">
<ol class="text"><li class="li1"><div class="de1">sudo su</div></li>
<li class="li1"><div class="de1">cd /</div></li>
<li class="li1"><div class="de1">sudo apt-get update</div></li>
<li class="li1"><div class="de1">sudo apt-get upgrade -y</div></li>
<li class="li2"><div class="de2">sudo apt-get install build-essential -y</div></li>
<li class="li1"><div class="de1">sudo apt-get install apache2 apache2-utils -y</div></li>
<li class="li1"><div class="de1">sudo apt-get install mysql-server php5-mysql -y</div></li>
<li class="li1"><div class="de1">sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt -y</div></li>
<li class="li1"><div class="de1">sudo mysql_install_db</div></li>
<li class="li2"><div class="de2">sudo mysql_secure_installation</div></li>
<li class="li1"><div class="de1">$mysql -u root -p</div></li>
<li class="li1"><div class="de1">$CREATE DATABASE DATA-BASE-NAME;</div></li>
<li class="li1"><div class="de1">$CREATE USER 'DATA-BASE-USER'@'localhost' IDENTIFIED BY 'PASSWORD-HERE';</div></li>
<li class="li1"><div class="de1">$GRANT ALL PRIVILEGES ON DATA-BASE-NAME.* TO 'DATA-BASE-USER'@'localhost' IDENTIFIED BY 'PASSWORD-HERE';</div></li>
<li class="li2"><div class="de2">$FLUSH PRIVILEGES;</div></li>
<li class="li1"><div class="de1">$exit</div></li>
<li class="li1"><div class="de1">sudo apt-get install g++ python subversion gperf make devscripts fakeroot git curl zlib1g-dev python-certbot-apache -t jessie-backports -y</div></li>
<li class="li1"><div class="de1">wget https://dl-ssl.google.com/dl/linux/direct/mod-pagespeed-stable_current_amd64.deb</div></li>
<li class="li1"><div class="de1">sudo dpkg -i mod-pagespeed-*.deb</div></li>
<li class="li2"><div class="de2">sudo apt-get -f install</div></li>
<li class="li1"><div class="de1">sudo apt-get update</div></li>
<li class="li1"><div class="de1">sudo apt-get upgrade -y</div></li>
<li class="li1"><div class="de1">sudo apt-get install mod-pagespeed-beta -y</div></li>
<li class="li1"><div class="de1">rm mod-pagespeed-stable_current_amd64.deb</div></li>
<li class="li2"><div class="de2">sudo nano /etc/apache2/sites-enabled/000-default.conf</div></li>
<li class="li1"><div class="de1">##################################################</div></li>
<li class="li1"><div class="de1">&lt;VirtualHost *:80&gt;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; ServerName www.example.com</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; ServerAdmin webmaster@example.com</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; DocumentRoot /var/www/html</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; ErrorLog ${APACHE_LOG_DIR}/error.log</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; CustomLog ${APACHE_LOG_DIR}/access.log combined</div></li>
<li class="li1"><div class="de1">&lt;/VirtualHost&gt;</div></li>
<li class="li1"><div class="de1">&lt;Directory /var/www/&gt;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; Options Indexes FollowSymLinks MultiViews</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; AllowOverride All</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; Order allow,deny</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; allow from all</div></li>
<li class="li1"><div class="de1">&lt;/Directory&gt;</div></li>
<li class="li2"><div class="de2">##################################################</div></li>
<li class="li1"><div class="de1">certbot --apache</div></li>
<li class="li1"><div class="de1">certbot renew --dry-run</div></li>
<li class="li1"><div class="de1">certbot renew --quiet</div></li>
<li class="li1"><div class="de1">sudo a2dismod autoindex</div></li>
<li class="li2"><div class="de2">sudo service apache2 restart</div></li>
<li class="li1"><div class="de1">reboot</div></li>
