# GPE

GPE est une application de gestion de présence électronique à l'aide d'appareil biometrique: lecteur d'empreinte.

## LOGICIEL

Premierement il faut installer php:
- [Windows](https://grafikart.fr/tutoriels/windows-php-mysql-901#:~:text=L'installation%20de%20PHP%20est,la%20version%20Non%20Thread%20Safe)
- [Linux](https://doc.ubuntu-fr.org/php#:~:text=Il%20existe%204%20mani%C3%A8res%20d,fpm%20pour%20FastCGI%20Process%20Manager)

En second lieu il faut installer Laravel 8:
- [Windows](https://laratutorials.com/install-composer-windows-10-xampp/)
- [Linux](https://ubunlog.com/fr/laravel-framework-php-ubuntu/#:~:text=Pour%20installer%20Laravel%2C%20nous%20irons,%2F%20Var%20%2F%20www%20%2F%20html.&text=La%20commande%20ci%2Ddessus%20cr%C3%A9era,avec%20l'installation%20de%20Laravel.)

Apres avoir cloner le projet, vous le lancerez sur un IDE de votre choix et ouvrirez votre projet sur terminale.

Afin d'installer les dépendances, sur le terminale ouvert, vous lancerez les commandes:

```bash
composer install
```
Puis
```
npm i
```

Ensuite, sur l'IDE vous irez vers ''.env'' et allez renseigner les informations sur votre base de donnees créée au préalable(Le SGBD, le username, le password, le nom de la BD).

Maintenant migrer les tables vers votre BD en tapant sur le terminale précédemment ouvert la commande:

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

## Materiel
- Ordinateur avec un systeme Linux ou Windows ou MacOS avec au moins 1,7 GHz, 80 gb de ROM, 2 Gb de RAM
- Un Point d'access pour etablir la connexion entre la machine et le lecteur d'empreinte
- Un lecteur d'empreinte.

## Contacts
- Github:
```
Kameronaf
```
```
bikahf5@gmail.com
- Email:
```
dorcasoben2002@gmail.com
```
```
Oben2002
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
