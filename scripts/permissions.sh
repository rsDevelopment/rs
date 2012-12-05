sudo rm -R /var/www/rs/app/tmp/cache/models
sudo rm -R /var/www/rs/app/tmp/cache/persistent
sudo rm -R /var/www/rs/app/tmp/cache/views

sudo mkdir /var/www/rs/app/tmp/cache/models
sudo mkdir /var/www/rs/app/tmp/cache/persistent
sudo mkdir /var/www/rs/app/tmp/cache/views

sudo chgrp -R www-data /var/www/rs/app/tmp/cache
sudo chmod -R 777 /var/www/rs/app/tmp/cache

sudo /etc/init.d/apache2 restart


