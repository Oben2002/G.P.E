# GPE

GPE est une application de gestion de présence électronique à l'aide d'appareil biometrique: lecteur d'empreinte.
## Installation

Premierement il faut installer php:
- [Windows](https://grafikart.fr/tutoriels/windows-php-mysql-901#:~:text=L'installation%20de%20PHP%20est,la%20version%20Non%20Thread%20Safe)
- [Linux](https://doc.ubuntu-fr.org/php#:~:text=Il%20existe%204%20mani%C3%A8res%20d,fpm%20pour%20FastCGI%20Process%20Manager)
En second lieu il faut installer Laravel 8:
- [Windows](https://laratutorials.com/install-composer-windows-10-xampp/)
- [Linux](https://ubunlog.com/fr/laravel-framework-php-ubuntu/#:~:text=Pour%20installer%20Laravel%2C%20nous%20irons,%2F%20Var%20%2F%20www%20%2F%20html.&text=La%20commande%20ci%2Ddessus%20cr%C3%A9era,avec%20l'installation%20de%20Laravel.)
Ensuite vous allez renseigner les informations sur votre base de donnees en allant vers .env
Maintenant migrer les tables vers votre BD en tapant sur le terminale:

```php migrate
php artisan migrate
```
Maintenant vous pouvez lancer le projet:
```
php artisan serve
```
NB: en cas déchec de lancement faite un:
```
composer update
```
puis relancez.

## Usage

```python
import foobar

# returns 'words'
foobar.pluralize('word')

# returns 'geese'
foobar.pluralize('goose')

# returns 'phenomenon'
foobar.singularize('phenomena')
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
