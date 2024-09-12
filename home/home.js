//home
$('#nav-home').addClass('active fw-bold');
$(()=>{
    if(sessionStorage.getItem('login') == 'true'){
        $('#nav-logout').removeClass('d-none');
    }
    scrollCalculate();
});

function scrollCalculate(){
    if(window.scrollY > 200){
        $('#floating-btn').fadeIn();
    }else{
        $('#floating-btn').fadeOut();
    }
}

window.onscroll = scrollCalculate;