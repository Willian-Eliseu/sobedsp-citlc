//login
$(()=>{
    if(
        sessionStorage.getItem('firstname') != null &&
        sessionStorage.getItem('lastname') != null &&
        sessionStorage.getItem('email') != null &&
        sessionStorage.getItem('event') != null &&
        sessionStorage.getItem('id') != null
    ){
        window.location.href = "../live/";
    }
});

const url = "https://eventos.tbr.com.br/global/api/login.api.php";
const formLogin = document.getElementById('form-login');
const btnSubmit = document.getElementById('btn-submit');

$('#form-login').on('submit', function(e){
    e.preventDefault();
    btnSubmit.disabled = true;

    $.post(url, 
        $('#form-login').serialize()
    ).done(function(data){
        let res = data;
        if(res.code === 0){
            Swal.fire({
                title: 'Atenção!',
                text: 'O email ou a senha informados não foram encontrados no sistema, por favor verifique ou faça o cadastro',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                showConfirmButton: true,
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.reload();
                }
            }); 
        }else{
            sessionStorage.setItem('login', true);
            for(x in res.data){
                if(
                    x == 'firstname' ||
                    x == 'lastname' ||
                    x == 'email' ||
                    x == 'event' ||
                    x == 'id' ||
                    x == 'enable' ||
                    x == 'control_hash' ||
                    x == 'treatment'
                ){
                    sessionStorage.setItem(x, res.data[x]);
                }
            }
            if(sessionStorage.getItem('control_hash') == null || sessionStorage.getItem('control_hash') == ""){
                sessionStorage.setItem('control_hash', "123456ADM");
            }
            window.location.href = "../live";
        }
    }).fail(function(error){    
        console.log('erro: ' + error);
    }).always(function(){
        btnSubmit.disabled = false;
    });
});