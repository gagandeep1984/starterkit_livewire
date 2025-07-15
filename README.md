composer require livewire/livewire 	**# installs livewire within laravel** <br>
-- manually create /resources/views/layouts/app.blade.php **# for version 2 only** <br>
php artisan livewire:layout  		**# with version 3 only** <br>
php artisan make:livewire counter 	**# creates component and blade files** <br>

* Since Livewire creates for the root layout file app.blade.php which is either created manually or automatically depends on livewire version. 

![Alt text](/screenshots/counter-component.png "The counter component visual image")