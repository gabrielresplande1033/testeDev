# Tecnologias utilizadas
- [Laravel](https://laravel.com//)
- [Repository](https://github.com/andersao/l5-repository)
- [DOMPDF Wrapper for Laravel 5](https://github.com/barryvdh/laravel-dompdf)
- [SweetAlert](https://sweetalert.js.org/)

# Funcionalidades da aplicação
- Crud de Clientes, Produtos e Nota(editar nota não implementado)
- Gerar relatório de notas em PDF

# Como executar este projeto
Para executar a aplicação, basta clonar o projeto, já ter previamente instalado o composer e o laravel, e rodar os seguintes comandos:
- composer update
- php artisan key:generate
- php artisan migrate:fresh
- php artisan serve

# Observações
A intenção do teste desenvolvido foi utilizar o padrão de projetos do Laravel(MVC) utilizando jquery e javascript(conforme descrição do teste). Implementado também o padrão Repository, a fim de isolar consultas e ter melhor aproveitamento delas, tal como manter a organização do código.
Alguns fluxos não finalizados por questão de tempo (como retornar a listagem ao inserir um cliente...etc). As rotas também não estão sendo autenticadas para o usuario logado.
