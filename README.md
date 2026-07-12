# wstools


## Synfony Technical Requirements:

### PHP 8.4 or higher
using Github Codespaces
A Solução Recomendada: Configurar o Dev Container
Se você ainda não tem, crie uma pasta chamada .devcontainer na raiz do seu projeto e, dentro dela, um arquivo chamado devcontainer.json.

Adicione o seguinte conteúdo para forçar o Codespaces a usar o PHP 8.4:

JSON
{
  "name": "PHP 8.4 Environment",
  "image": "mcr.microsoft.com/devcontainers/php:1-8.4"
}
Por que fazer assim? A Microsoft mantém imagens prontas para o Codespaces. Ao definir a versão 8.4, o ambiente já nasce com o PHP correto, OpenSSL configurado e sem erros de permissão de serviços.

Depois de salvar o arquivo:

Pressione Ctrl + Shift + P (ou Cmd + Shift + P no Mac).

Digite e selecione: Codespaces: Rebuild Container.

*tentei usar a versão 8.5 e tive erro.

## Composer 

*php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
Xdebug: [Step Debug] Could not connect to debugging client. Tried: localhost:9000 (through xdebug.client_host/xdebug.client_port).

solução:
php "-dxdebug.mode=off" -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php "-dxdebug.mode=off" composer-setup.php

## Symfony

sudo apt-get update
curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash && sudo apt install symfony-cli
sudo apt install symfony-cli

### Verificar pendencias do symfony
symfony check:requirements

#### Instalar os pacotes do projeto
php composer.phar install

#### Ajustes no php.ini
php --ini


## starts the server and opens the application in a single command

symfony server:start --open

### Exemplos 1
https://organic-eureka-pggxgw45wh7gg6-8000.app.github.dev/lucky/number
https://organic-eureka-pggxgw45wh7gg6-8000.app.github.dev/lucky/number?qt_chars=12

https://organic-eureka-pggxgw45wh7gg6-8000.app.github.dev/lucky/number_char
https://organic-eureka-pggxgw45wh7gg6-8000.app.github.dev/lucky/number_chars?qt_chars=12

### Testes unitarios
Install
composer require --dev symfony/test-pack

Criando um teste
symfony console make:test UserServiceTest

Executando os testes
php bin/phpunit

ou

symfony php ./vendor/bin/phpunit
