# projeto-laravel8-docker
Ambiente de desenvolvimento PHP 8 + JIT habilitado, Apache, SGBD MySQL 8 e Adminer

**Pré-requisitos:** Ter o Docker e Docker-compose instalados.


[Instalando Docker no Windows 10](https://mundodacomputacaointegral.blogspot.com/2019/10/instalando-o-docker-no-windows.html)

[Instalando Docker e Docker-compose no Linux (qualquer distro)](https://mundodacomputacaointegral.blogspot.com/2019/10/instalando-docker-e-docker-compose-no-Linux.html)

Após ter instalado o Docker e Docker-compose, segue os procedimentos: 

1. Fork do repositório

2. Clonar o repositório forkado

3. Acessar o diretório onde salvou o clone do repositório

4. Execute `docker-compose up -d`

O diretório src do HOST é o volume mapeado no diretório /var/www/html do CONTAINER. Então, é no diretório src que deve salvar os arquivos .php.

Acesse o Adminer http://localhost:8080

Logar com usuário root com o password definido no docker-compose.yml e cria o banco de dados no SGBD MySQL

Copiar o arquivo .env.example (template) para o .env e coloque as informações de banco de dados

Em DB_HOST coloca o nome do container do banco de dados, no caso foi db

`$ cp src/crud-laravel/.env.example src/crud-laravel/.env`

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome-banco-de-dados-criado
DB_USERNAME=root
DB_PASSWORD=secret

```

Instale o Laravel framework com composer

`$ docker exec -it php8-apache composer install`

Execute o migrations

`$ docker exec -it php8-apache php artisan migrate`

Gerar a chave única da aplicação

`$ docker exec -it php8-apache php artisan key:generate`

No arquivo /etc/hosts, coloque o nome do Vhost configurado no projeto, no caso foi app.intranet
127.0.0.1 app.intranet

http://app.intranet:8000/marcas 

Feito!
