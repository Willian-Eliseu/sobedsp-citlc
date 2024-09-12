$(()=>{
    const documentMain = document.getElementById('main');
    const navbarHeader = document.getElementById('navbarHeader');
    documentMain.style.marginTop = navbarHeader.offsetHeight + "px";
});