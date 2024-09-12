//support
$('#nav-support').addClass('active fw-bold');

$(()=>{
    if(sessionStorage.getItem('login') == 'true'){
        $('#nav-logout').removeClass('d-none');
    }
});

$('#form-support').on('submit', function(e){
    e.preventDefault();
    $('#btn-submit').prop('disabled', true);
    
    $.post("../assets/php/support.php", 
        $('#form-support').serialize()
    ).done(function(data){
        if(data == 0){
            Swal.fire({
                title: 'Atenção',
                text: 'Sua mensagem não pôde ser enviada, por favor entre em contato pelo whatsapp (14) 98188-2324',
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
            Swal.fire({
                title: 'Sucesso',
                text: 'Sua mensagem foi enviada com sucesso',
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                showConfirmButton: true,
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.href = `../home/`;
                }
            });
        }
    }).fail(function(e){
        console.log('erro: ' + e);
    }).always(function(){
        $('#btn-submit').prop('disabled', false);
    })
});