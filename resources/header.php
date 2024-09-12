<header>
    <nav id="navbarHeader" class="navbar navbar-expand-lg bg-light fixed-top shadow" data-bs-theme="light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/logo.png" alt="logo" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarHeaderColapse" aria-controls="navBarHeaderColapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBarHeaderColapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item align-self-center">
                        <a class="nav-link px-3 btn-principal rounded-3" href="../login/" id="navLogin">ACESSAR</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="../home/" id="nav-home">HOME</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="../home/#speakers" id="nav-home">PALESTRANTES</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="../home/#schedule" id="nav-home">PROGRAMAÇÃO</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="../subscribe/" id="nav-subscribe">CADASTRO</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" target="_blank" href="<?= $_SESSION[NOME_SESSAO]['siteoficial'] ?>" id="navOfficial">SITE OFICIAL</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="../support/" id="nav-support">SUPORTE</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link d-none" href="../logout/" id="nav-logout">SAIR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>