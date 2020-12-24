Passo a passo para implantação.

1º - Efetue o download do Xampp(https://www.apachefriends.org/pt_br/download.html);
2º - Faça a instalação do Xampp na unidade que desejar, e ao abrir o painel de controle dele, inicie os serviços de apache e mysql;
3º - Substitua a pasta htdocs dentro da pasta onde o xampp está instalado pela htdocs deste git;
4º - Acesse localhost/phpmyadmin;
5º - Utilize a aba importar, selecione o arquivo xastre.sql localizado na pasta mysql do htdocs baixado e importe-o;
6º - Inicie o serviço do laravel pelo prompt de comando utilizando o comando php artisan serve na pasta 'htdocs/laravel';
7º - Acesse o sistema através do link localhost:8000/produtos;