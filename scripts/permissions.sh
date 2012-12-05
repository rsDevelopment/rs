chmod -R 777 ../app/tmp/cache
sudo chgrp -R www-data ../app/tmp/cache


sudo chmod -R 777 ../app/tmp/cache/models
sudo chgrp -R www-data ../app/tmp/cache/models

sudo chmod -R 777 ../app/tmp/cache/persistent
sudo chgrp -R www-data ../app/tmp/cache/persistent

sudo chmod -R 777 ../app/tmp/cache/views
sudo chgrp -R www-data ../app/tmp/cache/views

sudo chmod -R 777 ../app/tmp
sudo chgrp -R www-data ../app/tmp


sudo /etc/init.d/apache2 restart


~                 
