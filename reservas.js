function reservar(iddate, iddias, idmorador) {


    let dias = document.getElementById(iddias)
    
    let botao = document.getElementById('bt' + iddias)
    botao.type = 'submit'
    botao.value = iddias
    //botao.className = 'btn btn-danger disabled'
    
    let inputData = document.getElementById('data' + iddias)
    
    let inputDia = document.getElementById('dia' + iddias)
    
    let inputM = document.getElementById('morador' + idmorador)
    
    
    let data = inputData.value
    
    let form = document.createElement('form')
    form.id='form_' + iddias
    
    //form.action = '?' +data +iddias
    
    
    console.log(inputData)
    console.log(inputDia)
    console.log(inputM)
    console.log(data)
    
    if(!confirm('confirmar reserva?')){
           
    }   else {
        dias.appendChild(botao, null)
        form.appendChild(inputData, form[0])
        form.appendChild(inputDia, form[1])
        form.appendChild(inputM, form[2])
        form.method = 'post'
        //form.action = 'painel_morador.php'
        form.action = 'user-controller.php?acao=inserir_data'
        document.body.appendChild(form)
        form.submit();
    }    
        
    
    /*
    botao.onclick= function() {
        document.body.appendChild(botao)
        botao.type = 'submit'
        botao.value = iddias
        botao.className = 'btn btn-danger disabled'
    
    
    }     
    // terminar retorno da data para marcar os dias já reservados ... 
    */    
    
    
    
    
    
    }
        
        
        
    
        
    