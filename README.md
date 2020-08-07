CRUD Oficina 2.0

Bibliotecas usadas: Bootstrap 
Linguagem back-end: PHP 7
Banco de dados: MySQL


-- CONFIGURANDO O PROJETO APÓS BAIXAR --
Ao baixar o projeto deve-se executar no prompt de comandos:  composer update 
                                                             composer install 
*o projeto está sendo baixado em duas pastas, certifique-se de estar na pasta correta para executar os comandos.

Em seguida usar o promp de comando : copy .env.example .env
Após o arquivo ser copiado rodar o comando para gerar a chave: php artisan key:generate

-- CONFIGURANDO O BANCO DE DADOS --
As migrações, factories e seeds já estão configuradas.

*configure sua conexão no arquivo .env

Os seguintes comandos devem ser ultilizados: php artisan migrate 
                                             php artisan db:seed *esse comando irá popular o banco de dados, ultilize-o ao menos 2x
                                    
Agora o projeto está pronto para ser executado: php artisan serve                                     
