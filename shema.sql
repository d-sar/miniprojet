
php artisan make:model Patient -mcr
php artisan make:model Medecin -mcr
php artisan make:model Consultation -mcr
php artisan make:model Ordonnance -mcr
php artisan make:model Rendez-Vous -mcr
php artisan make:model Pathologie -mcr
php artisan make:model Constater -mcr

php artisan make:factory Patient --model=Patient 
php artisan make:factory Medecin --model=Medecin
php artisan make:factory Consultation  --model=Consultation
php artisan make:factory Ordonnance --model=Ordonnance
php artisan make:factory Rendez-Vous --model=Rendez-Vous
php artisan make:factory Pathologie --model=Pathologie