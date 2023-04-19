# ADV - Gestão de Processo Jurídico

Sistema de cadastro de processos jurídicos desenvolvido em PHP com Laravel.

## Módulos

- Login
- Processos
- Pedidos
- Tipo de Pedidos
- Clientes

## Requisitos

- PHP >= 5.5.9
- MySql >=5
- Composer

## Tecnologia

- PHP
- JS
- Jquery
- Json
- CSS and SCSS
- Bootstrap
- Composer
- Artisan
- Laravel

## Instalação

```
$ composer install

$ php artisan key:generate

$ php artisan migrate

$ php artisan db:seed
```

Crie um banco de dados com o nome "adv" no seu Mysql.

```
$ mysql -u <your user> -p <your password>

mysql> create database `adv`;
```

Volte o terminal, verifique o arquivo .env e efetue a configuração correta para conexão do seu banco de dados.<br>

Depois de realizado isso, rode o projeto:

```
$ php artisan serve
```

## Acesso ao Sistema

Para acessar o sistema utilize o seguinte endereço:<br>
http://localhost:8000/<br>

- Login:
	- E-mail: admin@admin.com
	- Senha: admin

## Criação de Novos Módulos

Crie a nova tabela no banco de dados.<br>
Após, use o nome dessa tabela como entrada e execute o seguinte comando:

```
php artisan make:crud TABLE_NAME --master-layout=layouts.app
```

## Licença

Projeto licenciado sob <a href="LICENSE">The MIT License (MIT)</a>.

## Screenshots

![Screenshots](screenshots/screenshot01.png) <br><br>
![Screenshots](screenshots/screenshot02.png) <br><br>
![Screenshots](screenshots/screenshot03.png) <br><br>
![Screenshots](screenshots/screenshot04.png) <br><br>
![Screenshots](screenshots/screenshot05.png) <br><br>
![Screenshots](screenshots/screenshot06.png) <br><br>
![Screenshots](screenshots/screenshot07.png) <br><br>
![Screenshots](screenshots/screenshot08.png) <br><br>

## Modelo ER

![Screenshots](screenshots/modelo_er.png) <br><br>


Desenvolvido por<br>
Danilo Meneghel<br>
danilo.meneghel@gmail.com<br>
http://danilomeneghel.github.io/<br>
