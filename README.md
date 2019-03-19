# Tecnologias utilizadas
- [Laravel](https://laravel.com//)
- [Repository](https://github.com/andersao/l5-repository)
- [DOMPDF Wrapper for Laravel 5](https://github.com/barryvdh/laravel-dompdf)
- [SweetAlert](https://sweetalert.js.org/)

# Funcionalidades da aplicação
- Crud de Clientes, Produtos e Nota(editar nota não implementado)
- Gerar relatório de notas em PDF

# Como executar este projeto
Para executar a aplicação, basta clonar o projeto e executar os seguintes comandos na pasta raiz:
- composer update
- copiar o arquivo de exemplo .env.example para .env
- editar o arquivo .env colocando os dados da sua conexão de banco
- php artisan key:generate
- php artisan migrate:fresh
- php artisan serve

# Observações
Esse projeto tem como principal objetivo a avaliação do processo seletivo da Secretaria de Estado de Saúde para a vaga de Desenvolvedor Web. No projeto foi implementado funcionalidades que foram descritas em um arquivo enviado por e-mail. As funcionalidades foram implementadas utilizando o framework Laravel, que implementa o padrão de arquitetura  MVC. Também foi utilizado  JavaScript e JQuery. Para isolar a camada de acesso aos dados foi utilizado padrão de projetos Repository.
Alguns fluxos não finalizados por questão de tempo (como retornar a listagem ao inserir um cliente...etc). As rotas também não estão sendo autenticadas para o usuario logado.
