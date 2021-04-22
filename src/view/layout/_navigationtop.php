<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <div class="container">
    <a href="#" class="navbar-brand" style="color: #f39c12; font-weight: bold">You Fitness</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/treino/hoje">Hoje</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/aluno">Alunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/treino">Treinos</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/configuracao">Configuração</a>
        </li> -->

      </ul>
      <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li class="nav-item dropdown">
          <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Adminstrador
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
            <a class="dropdown-item" href="<?php echo BASE_URL; ?>">Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo BASE_URL; ?>/login/logout">Sair</a>
          </div>
        </li>

      </ul>
    </div>
  </div>
</div>