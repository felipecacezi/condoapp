const autenticar = () => {

    const obj = new Object;
    obj.array = new Object;


    obj.init = ()=>{
        obj.gerarArray();
        obj.autenticar();
    }

    obj.gerarArray = ()=>{

        obj.array.condominio_email = document.getElementById('txt-email').value;
        obj.array.condominio_senha = document.getElementById('txt-senha').value;

    }

    obj.autenticar = ()=>{

        fetch('/usuarios/autenticar', {
            method: 'GET',
            headers: {
                "content-type" : "application/json",
                "email": obj.array.condominio_email,
                "senha": obj.array.condominio_senha
            }
        }).then(function(retorno){
            return retorno.json()          
        }).then(function(retorno){
            
            switch (retorno.status) {
                case 'ok':

                    document.getElementById('sucess-text').innerHTML = retorno.message;

                    console.log(retorno.message);

                    var myModal = new bootstrap.Modal(document.getElementById('sucess'))                    
                    myModal.show()  

                break;
                case 'error':

                break;
                case 'empty':

                break;                
            }

        }).catch(function(error){
            
        })

    }

    return obj;
}