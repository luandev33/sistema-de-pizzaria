 
       function retempo() {
   
             var tempo = window.document.getElementById('time');
               const hoje = new Date()
        
        tempo.value = (hoje.getHours() + ':' + hoje.getMinutes()) ;

       }