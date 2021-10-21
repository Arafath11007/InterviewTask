##Installation and configuration

- Clone the code using the collowing command 
    "git clone https://github.com/Arafath11007/InterviewTask.git"
- Open CLI inside the project route directory and run the following commands
    composer install // to install composer packages
    php artisa migrate // to run the database imgration
    php artisan db:seed // to generate fake data in database products table
    php artisan serv // to start artisan server
    
    
    
##Creating new rule
- user can add new rule classes in "app/CustomRules/" directory and register the class in AppServiceProvider.php file

##Project workflow 
- User can search products based on the pre defined rules from index page
