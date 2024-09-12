//home
$('#nav-home').addClass('active fw-bold');
$(()=>{
    if(sessionStorage.getItem('login') == 'true'){
        $('#nav-logout').removeClass('d-none');
    }
});