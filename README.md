<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

  <h1>Projeto de Sistema de Pedidos em Laravel</h1>
  <p>Esse projeto consiste em uma aplicação web para gerenciamento de pedidos em uma pizzaria, desenvolvido em Laravel.</p>
  <h2>Funcionalidades</h2>
  <p>A aplicação tem as seguintes funcionalidades:</p>
  <ul>
    <li>Cadastro de Pedidos: Na tela de atendimento, a atendente pode cadastrar os pedidos dos clientes em um formulário, informando os itens, nome do cliente, sabor da pizza, se vai acompanhar borda, etc.</li> <br>
    <li>Acompanhamento de Pedidos: Em outra tela, a atendente pode acompanhar os pedidos em andamento, visualizando os pedidos que estão sendo executados no momento.</li><br>
    <li>Comanda para Pizzaiolos: Na tela dos pizzaiolos, os pedidos são exibidos em forma de comanda, mostrando os itens e quantidade a serem preparados. Ao clicar em finalizar, o pedido é removido da tela dos pizzaiolos e da tela de acompanhamento da atendente.</li> <br>
    <li>Relatório de Pedidos: A página de relatórios apresenta uma estrutura semelhante à da atendente, porém contém todos os pedidos que foram feitos no dia. Abaixo do histórico de pedidos, existem dois botões: um para gerar um relatório contábil, que utiliza JavaScript para fazer a contabilidade dos pedidos, mostrando a quantidade de todos os pedidos do dia, a quantidade de pedidos que foram pagos em dinheiro, cartão, entregues ou retirados no local. O relatório é exibido em uma tabela com informações detalhadas. Além disso, há dois círculos de progresso que mostram a porcentagem de pedidos pagos em dinheiro e cartão. e o outro botão é para Finalizar o dia, tendo a funcionalidade de deletar todos os itens registrados em todas as tabelas, assim "formatando" para o uso no dia seguinte.</li> <br>
  </ul>
  <h2>Tecnologias Utilizadas</h2>
  <ul>
    <li>PHP </li> <br>
    <li>Laravel </li> <br>
    <li>MySQL</li> <br> 
    <li>HTML</li> <br>
    <li>CSS</li> <br>
    <li>JavaScript</li> <br>
  </ul>
  <h2>Como Executar o Projeto</h2>
  <p>Para executar o projeto, siga os seguintes passos:</p>
  <ol>
    <li>Clone o repositório em sua máquina local.</li> <br>
    <li>Configure o arquivo .env com as configurações do banco de dados que você irá utilizar.</li> <br>
    <li>Execute o comando composer install para instalar as dependências do projeto.</li> <br>
    <li>Execute o comando php artisan migrate para criar as tabelas no banco de dados.</li> <br>
    <li>Execute o comando php artisan serve para iniciar o servidor local.</li> <br>
    <li>Acesse a aplicação no navegador em http://localhost:8000/.</li> <br>
  </ol>
  <h2>Conclusão</h2>
  <p>Este é um projeto simples, mas eficaz para gerenciamento de pedidos em uma pizzaria. obviamente esta versão é bem simplista e ainda falta muita coisa, e alguns ajustes de css, sinta-se a vontade para fazer as alteraçoes ou pivotar! </p>
