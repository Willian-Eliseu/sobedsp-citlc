$(document).ready(function() {
    Swal.fire({
        title: "Logout",
        text: "Quer realmente sair?",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Sim, sair",
        cancelButtonText: "Não"
    }).then((result) => {
        if (result.isConfirmed) {
            sessionStorage.clear();
            window.location.href = `../home`;
        } else {
            history.back();
        }
    })
})