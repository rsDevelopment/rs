clear
#/var/www/rs/app/Console/cake test app 
#cp /var/www/rs/app/Config/databaseTest.php /var/www/rs/app/Config/database.php
#/var/www/rs/app/Console/cake test app Controller/Checklists --filter testHouseIdNotAvailableInDatabase
#/var/www/rs/app/Console/cake test app Controller/Checklists --filter testDeselectedValuesSetToCero
/var/www/rs/app/Console/cake test app Controller/ChecklistsController
#/var/www/rs/app/Console/cake test app Controller/HomesController


#HELPERS -> 
#/var/www/rs/app/Console/cake test app View/Helper/HomeHelper
#/var/www/rs/app/Console/cake test app View/Helper/RecurrentDateHelper
