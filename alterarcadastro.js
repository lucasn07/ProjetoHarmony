function editar (id, txtnome, txtemail, txttelefone, txtapto) {

let divpai = document.getElementById('div_' + id)

let div1 = document.createElement('div')
div1.className = 'd-sm-flex'

let div2 = document.createElement('div')
div2.className = 'd-sm-flex'

let div3 = document.createElement('div')
div3.className = 'd-sm-flex'

let div4 = document.createElement('div')
div4.className = 'd-sm-flex'

let div5 = document.createElement('div')
div5.className = 'd-sm-flex'

let div6 = document.createElement('div')
div6.className = 'd-sm-flex'

let input1 = document.createElement('input')
input1.type = 'text'
input1.name = 'nome'
input1.className = 'form-control'
input1.value = txtnome
input1.required = true

let input2 = document.createElement('input')
input2.type = 'email'
input2.name = 'email'
input2.className = 'form-control'
input2.value = txtemail
input2.required = true

let input3 = document.createElement('input')
input3.type = 'number'
input3.name = 'telefone'
input3.className = 'form-control'
input3.value = txttelefone
input3.required = true

let input4 = document.createElement('input')
input4.type = 'number'
input4.name = 'apartamento'
input4.className = 'form-control'
input4.value = txtapto
input4.required = true


let botao1 = document.createElement('button')
botao1.type = 'submit'
botao1.className = 'btn btn-outline-info fas fa-check'
botao1.value = 'anonymous function'
botao1.onclick= function() {
    
    if(confirm('Deseja confirmar alteração no cadastro?') == false) {
        let form = document.getElementById('form')
        form.action = 'painel_sindico_ativos.php?ativos'
    }
    } 

let inputvazio = document.getElementById('inputvazio')
inputvazio.value = id
inputvazio.name = 'id'

let form = document.getElementById('form')
form.method = 'post'
form.action = 'user-controller.php?acao=alterar'



let divheader = document.getElementById('divheader')

let divmaster = document.getElementById('divmaster')

form.innerHTML = ''
divmaster.innerHTML = ''
divpai.innerHTML = ''


form.appendChild(divmaster, form[0])
form.appendChild(divpai, form[1])
form.appendChild(divheader, form[2])

divpai.appendChild(div1, divpai[0])
divpai.appendChild(div2, divpai[1])
divpai.appendChild(div3, divpai[2])
divpai.appendChild(div4, divpai[3])
divpai.appendChild(div5, divpai[4])
divpai.appendChild(div6, divpai[5])
//divpai.appendChild(inputvazio, divpai[6])

div1.appendChild(input1)
div2.appendChild(input2)
div3.appendChild(input3)
div4.appendChild(input4)
div5.appendChild(botao1)
//div6.appendChild(botao2)
div5.appendChild(inputvazio, div5[1])
}

function excluir(id) { //inativar cadastro

    if(confirm('Confirmar a exclusão de cadastro?') == false) {
        let form = document.getElementById('form')
        form.action = 'painel_sindico_ativos.php?ativos'
    } else {
        
        let form = document.getElementById('form')
        form.method = 'post'
        form.action = 'user-controller.php?acao=excluir'
        
        let inputvazio = document.getElementById('inputvazio')
        inputvazio.value = id
        inputvazio.name = 'id'

        form.appendChild(inputvazio, form[0])
    }         


    
}

function aceitar (id){
    
    if(confirm('Confirmar aceitar o cadastro?') == false) {
        let form = document.getElementById('form')
        

        form.action = 'painel_sindico_ativos.php?pendentes'
    } else {
        
        let form = document.getElementById('form')
        form.method = 'post'
        form.action = 'user-controller.php?acao=aceitar'
        
        let inputvazio = document.getElementById('inputvazio')
        inputvazio.value = id
        inputvazio.name = 'id'

        form.appendChild(inputvazio, form[0])
    } 
}

function rejeitar (id){ 
    
    if(confirm('Confirmar rejeitar o cadastro?') == false) {
        let form = document.getElementById('form')
        form.action = 'painel_sindico.php?pendentes'
    } else {
        
        let form = document.getElementById('form')
        form.method = 'post'
        form.action = 'user-controller.php?acao=rejeitar'
        
        let inputvazio = document.getElementById('inputvazio')
        inputvazio.value = id
        inputvazio.name = 'id'

        form.appendChild(inputvazio, form[0])
        
        
    }
}