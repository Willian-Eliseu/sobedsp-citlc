//subscribe
$('#nav-subscribe').addClass('active fw-bold');
$('#subscribe_cpf').mask('999.999.999-99');
const formSubscribe = document.getElementById("form-subscribe");

$(()=>{
    if(sessionStorage.getItem('login') == 'true'){
        $('#nav-logout').removeClass('d-none');
    }
});

//função para verificar o número de telefone
function verificaNumero(idioma) {
    const phoneNumber = phoneInput.getNumber();

    if (phoneInput.isValidNumber()) {
        console.log('formato válido');
        console.log(phoneNumber);
        document.getElementById('subscribe_cellphone').value = phoneNumber;
    } else {
        Swal.fire('Atenção', `Número de celular com formato inválido: ${phoneNumber}`, 'warning');
    }
}

//telefone internacional
const phoneInputField = document.querySelector("#partial_cellphone");
const phoneInput = window.intlTelInput(phoneInputField, {
    initialCountry: "br",
    preferredCountries: ["ar", "br", "py", "us"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

//form submit
formSubscribe.addEventListener('submit', function(e){
    e.preventDefault();
    if($('#subscribe_email').val() != $('#subscribe_confirmemail').val()){
        Swal.fire("Atenção", "Os emails precisam ser iguais", "warning");
    }else if($('#subscribe_password').val() != $('#subscribe_confirmpassword').val()){
        Swal.fire("Atenção", "As senhas precisam ser iguais", "warning");
    }else if($('#subscribe_cellphone').val() == "" || $('#subscribe_cellphone').val() == null){
        Swal.fire("Atenção", "Por favor, insira um número de celular válido", "warning");
    }else{
        $('#submit_button').prop('disabled', true);
        $.post('../assets/php/subscribe.control.php', 
            $('#form-subscribe').serialize()
        ).done(function(data){
            console.log(data);
            const resultado = JSON.parse(data);
            if(resultado.retorno === 1){
                if($('#loginPage').val() == "posinscricao"){
                    Swal.fire({
                        title: 'Sucesso',
                        html: 'Sua inscrição foi realizada com sucesso.',
                        icon: 'success',
                        showCancelButton: false,
                        cancelButtonColor: '#cccccc',
                        confirmButtonColor: '#3085d6',
                        showConfirmButton: true,
                        cancelButtonText: 'Não',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if(result.value){
                            window.location.href = '../home';
                        }else{
                            window.location.href = '../home';
                        }
                    });
                }else{
                    $.post('https://eventos.tbr.com.br/global/api/login.api.php', {
                        evento: $('#evento').val(),
                        pagina: 'pagamento',
                        tipoLogin: 'authentication',
                        email: $('#subscribe_email').val(),
                        senha: $('#subscribe_password').val()
                    }).done(function(data){
                        let resData = data;
                        for(x in resData.data){
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
                                sessionStorage.setItem(x, resData.data[x]);
                            }
                        }
                        if(sessionStorage.getItem('control_hash') == null || sessionStorage.getItem('control_hash') == ""){
                            sessionStorage.setItem('control_hash', "123456ADM");
                        }

                        window.location.href='../live';
                    });   
                }                
            }else if(resultado.retorno === 2){
                Swal.fire({
                    title: 'Atenção',
                    html: 'O email informado já se encontra cadastrado. Em caso de dúvida, por favor entre em contato com o suporte',
                    icon: 'info',
                    showCancelButton: false,
                    cancelButtonColor: '#cccccc',
                    confirmButtonColor: '#3085d6',
                    showConfirmButton: true,
                    cancelButtonText: 'Não',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    document.getElementById('submit_button').disabled = false;
                    if(result.value){
                        window.location.href = './?page=home';
                    }else{
                        window.location.reload();
                    }
                });
            }else if(resultado.retorno === 3){
                Swal.fire("Atenção","Por favor verifique o CRM informado. Caso necessite, entre em contato com o suporte.","info");
                document.getElementById('submit_button').disabled = false;
            }
        })
    }
});