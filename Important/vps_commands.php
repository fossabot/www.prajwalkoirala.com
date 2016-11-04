sudo su
cd /
sudo apt-get update
sudo apt-get upgrade -y
sudo apt-get install build-essential -y
sudo apt-get install apache2 apache2-utils -y
sudo apt-get install mysql-server php5-mysql -y
sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt -y
sudo mysql_install_db
sudo mysql_secure_installation
$mysql -u root -p
$CREATE DATABASE DATA-BASE-NAME;
$CREATE USER 'DATA-BASE-USER'@'localhost' IDENTIFIED BY 'PASSWORD-HERE';
$GRANT ALL PRIVILEGES ON DATA-BASE-NAME.* TO 'DATA-BASE-USER'@'localhost' IDENTIFIED BY 'PASSWORD-HERE';
$FLUSH PRIVILEGES;
$exit
sudo apt-get install g++ python subversion gperf make devscripts fakeroot git curl zlib1g-dev python-certbot-apache -t jessie-backports -y
wget https://dl-ssl.google.com/dl/linux/direct/mod-pagespeed-stable_current_amd64.deb
sudo dpkg -i mod-pagespeed-*.deb
sudo apt-get -f install
sudo apt-get update
sudo apt-get upgrade -y
sudo apt-get install mod-pagespeed-beta -y
rm mod-pagespeed-stable_current_amd64.deb
sudo nano /etc/apache2/sites-enabled/000-default.conf
##################################################
<VirtualHost *:80>
        ServerName www.example.com
        ServerAdmin webmaster@example.com
        DocumentRoot /var/www/html
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<Directory /var/www/>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
</Directory>
##################################################
certbot --apache
certbot renew --dry-run
certbot renew --quiet
sudo a2dismod autoindex
sudo service apache2 restart
reboot
