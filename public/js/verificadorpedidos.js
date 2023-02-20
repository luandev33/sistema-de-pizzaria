
setTimeout(function() {
    var element = document.getElementById("comanda");
  
    if (!element || element.length === 0) {
        var newDiv = document.createElement("div");
        newDiv.innerHTML = "Não há nenhum pedido por enquanto...";
        newDiv.style.backgroundColor = "gray";
        newDiv.style.color = "white";
        newDiv.style.textAlign = "center";
        newDiv.style.position = "absolute";
        newDiv.style.top = "50%";
        newDiv.style.left = "50%";
        newDiv.style.transform = "translate(-50%, -50%)";
        document.body.appendChild(newDiv);
    }
  }, 500);

  setInterval(function() {
    location.reload();
  }, 10000);

