# Installation

Step 1: After cloning
```
composer update
```

Step 2: Create your environment file
Create an .env file, copy contents from .env.example, update to your own preference.(DB name, user,password)

Step3: Migration
on cmd line
```
php artisan migrate
```

# Done!

#Basic Generator Commands
<br \>
Scaffolding
```
php artisan infyom:scaffold $MODEL_NAME --datatables=true

OR

\\generate scaffold from existing table
php artisan infyom:scaffold $MODEL_NAME --fromTable --tableName=$TABLE_NAME

OR

\\api + scaffolding
php artisan infyom:api_scaffold $MODEL_NAME
```


API
```
\\optional pagination
php artisan infyom:api $MODEL_NAME --paginate=10
```

