
document.getElementById('btn-calcular').addEventListener('click', function() {

  let content = window.document.getElementById('content');
    
    content.style.display = "block";
    content.style.opacity = 1;



    let soma = 0;
    let qtdValores = 0;
    let valores = document.querySelectorAll('.valor');
    qtdValores = valores.length;
    valores.forEach(function(valor) {
      soma += parseFloat(valor.textContent);
    });
  
  
    let qtdDinheiro = 0;
    let qtdCartao = 0;
    let valorDinheiro = 0;
    let valorCartao = 0;
    let dincar = document.querySelectorAll('.dincar');
    valores.forEach(function(element, index) {
      if (dincar[index].textContent === 'Dinheiro') {
        qtdDinheiro++;
        valorDinheiro += parseFloat(element.textContent);
      } else if (dincar[index].textContent === 'Cartão') {
        qtdCartao++;
        valorCartao += parseFloat(element.textContent);
      }
    });

    let qtdentrega = 0;
    let qtdretirada = 0;

    let entrtegaretirada = document.querySelectorAll('.entrtegaretirada');
    entrtegaretirada.forEach(function(element) {
      if (element.textContent === 'Entrega') {
        qtdentrega++;
      } else if (element.textContent === 'Retirada') {
        qtdretirada++;
      }
    });

    let porcentagemDinheiro = (valorDinheiro / soma * 100).toFixed(2);
    let porcentagemCartao = (valorCartao / soma * 100).toFixed(2);





      let datare = window.document.getElementById('datare');


       var data = new Date();
       datare.innerHTML =(data.toLocaleDateString('pt-BR'));


       let totalpedidos = window.document.getElementById('totalpedidos');

       totalpedidos.innerHTML = qtdValores;

       let pedidospdinheiro = window.document.getElementById('pedidospdinheiro');

       pedidospdinheiro.innerHTML =  qtdDinheiro;

       let valortotaldinheiro = window.document.getElementById('valortotaldinheiro');
       
       valortotaldinheiro.innerHTML = `R$ ${valorDinheiro}`;

       let pedidospcartao = window.document.getElementById('pedidospcartao');

       pedidospcartao.innerHTML = qtdCartao;

       let valortotalcartao = window.document.getElementById('valortotalcartao');

       valortotalcartao.innerHTML = `R$ ${valorCartao}`;

       let pedidosentregues = window.document.getElementById('pedidosentregues');

       pedidosentregues.innerHTML = qtdentrega;

       let pedidosretirados = window.document.getElementById('pedidosretirados');

       pedidosretirados.innerHTML = qtdretirada;

       let somadia = window.document.getElementById('somadia');

       somadia.innerHTML = `R$ ${soma.toFixed(2)}`;


       let circle = window.document.getElementById('circleprogress'); 
       let number = porcentagemCartao;
 
       document.querySelector('.number').innerHTML = number + '%';
        circle.style.strokeDashoffset = 440 - (440 * number) / 100;

        let circle1 = window.document.getElementById('circleprogress1'); 
       let number1 = porcentagemDinheiro;
 
       document.querySelector('.number1').innerHTML = number1 + '%';
        circle1.style.strokeDashoffset = 440 - (440 * number1) / 100;
 

  });
  