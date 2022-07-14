## ATTENZIONE! IMPOSTARE USER ALL'INTERNO DI MODELS

### 1. Move the user model inside the app\Models folder

    Before anything, let’s create a folder named “Models” inside the app folder. Then, move the “User” model inside that newly created Models directory. As soon as you move the User model inside the app\Models folder, update the namespace of the User Model from “namespace App;” to “namespace App\Models;“.

### 2. Update User Model path on Auth Controllers

    Next, you need to update the path of the User model in the Register Controller. Or, in case if you felt doubt where it could be referenced inside auth controllers (RegisterController, LoginController, VerificationController, ForgotPasswordController, ResetPasswordController, and ConfirmPasswordController), then open the project folder in one of the code editors like sublime text, PHP storm, visual studio code editors, atom or any other of your choice. Then, search `User::` inside the Auth folder.

    Inside RegisterController, update “use App\User;” by “use App\Models\User;“. Here, we are just updating the path of the imported User Model.

### 3 Update config/auth.php

    After updating the user model path on Auth Controller, you need to update the path on config/auth.php. There under “providers” update the user model from “App\User” to “App\Models\User“.

    After updating the auth file, you should be able to Register and log in successfully for the first time after moving the user model inside the app\Models folder.

### 4. Update UserFactory

    Even without updating this one, you should be able to register and login users from register and login form respectively. But, if you are planning to generate some fake users to populate your database using UserFactory. Then, you must update the path of the User Model from “App\User” to “App\Models\User” in “database/factories/UserFactory“.

### 5. Run composer dump-autoload

    Lastly, you need to run the composer dump-autoload. It won’t download anything new but looks for all the classes that need to be included again. It just regenerates the list of all classes that need to be included in the project. To check these autoloaded classes, you need to open composer.json and look under the autoload section.

    Now, you have already moved your User Model inside app/Models folder, you are all set to get started. From now on, whenever you want to create a new model, run php artisan make:model Models/ModelName instead of php artisan make:model ModelName. With this approach, all your models with then are placed inside the app\Models folder.

    This much for today, if you find any confusion in any steps, please don’t hesitate to raise your issue on the comment section.

## 1 - Installare Laravel

    composer create-project --prefer-dist laravel/laravel:^7.0 .

## 2 - Installare Laravel auth

    <!-- Comandi da avviare insieme o singolarmente -->
    composer require laravel/ui:^2.4
    php artisan ui vue --auth

## 3 - Installare dipendenze NPM

    npm i

## 4 - Compilazione JS e CSS nella cartella public

    npm run watch / npm run dev

## 5 - Aggiornare Bootstrap 5

    1- aprire file package.jason
    2- modificare versione da 4 a 5
    3- inserire link css -> {{asset('css/app.css')}} <-
    4- avviare il comando ' npm i bootstrap '
    5- ricordarsi di modificare le proprietà dei componenti bootstrap già esistenti es( 'data-target' con 'data-bs-target' )

## 6 - Importare FontAwesome

    <!-- Free icons styles -->
    npm i --save @fortawesome/fontawesome-free

    <!-- Fare l'import nel file app.scss -->
    @import '~@fortawesome/fontawesome-free/css/all.css';

## 7 - Creare il DB su PHP My Admin

## 8 - Compilare il file .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=NOME-DATABASE
    DB_USERNAME=root
    DB_PASSWORD=root

    ## Se il server non è stato riavviato, riavviarlo oppure immettere il comando: php artisan config:cache
    ## se scarichi la repo devi ricreare il file .env copiando ed incollando l'example e generare la key con ' php artisan key:generate '

## 9 - Creare i modelli

    php artisan make:model Nome -a
    php artisan make:model Models/Nome -a  <!-- Se vuoi crearlo all'interno o inserirlo direttamente nella cartella -->
    <!-- -a serve per creare automaticamente seeder, migration, controller e factory (oltre al model) -->

## 10 - Impostare le colonne delle tabelle all'interno delle migration

    $table->string('email')->unique();
    <!-- Dove 'email' è il nome della colonna che mi serve, unique() è un attributo -->

## 11 - php artisan migrate

    inviamo i dati al database
    ## in caso di errori ' php artisan migrate:fresh ' per reinviare i dati da 0

## 12 - php artisan db:seed

    ex.1 : Creazione di un array all'interno del seeder ($tags) e relativo ciclo foreach

    $tags = ['Coding', 'Laravel','Css','JS','Vue','SQL' ];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->slug = Str::slug($new_tag->name);
            $new_tag->save();
        }

    ex.2 : Spostare l'array all'interno di un file db.php nella cartella config e immettere nel seeder -> config('db.nomeArray');

    Se vuoi utilizzare un comando unico per migration e seeder -> ' php artisan migrate --seed '

## 13 - Impostare le rotte

    <!-- La rotta definita da laravel `home` ci viene mostrata quando l'utente effettua il login. Modifichiamola ed usiamola come rotta principale del gruppo `admin`. -->

    Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function () {

    // Definiamo le rotte per il back office
    Route::resource('categories','CategoryController')->parameters([
        'categories' => 'category:slug'
    ])->except(['show','create','edit']);

    });

## 14 -
