<!-- <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" style="border-width: 0 0 0 0"> -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light">
  <!-- <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light"> -->
  <div class="container-fluid">

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="dashboard" class="navbar-brand header-title">
      <img src="<?php echo BASE_URL; ?>/assets/img/logo-azul.png" alt="youfitness" width="150px" class="navbar-brand-img">
    </a>
    <!-- User (xs) -->
    <div class="navbar-user d-md-none"></div>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidebarCollapse">

      <!-- Navigation -->
      <ul class="navbar-nav">

        <li class="nav-item" id="dashboard">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/dashboard">
            <i class="fe fe-home"></i> Dashboard
          </a>
        </li>

        <li class="nav-item" id="follow">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/follow">
            <i class="fe fe-heart"></i> Seguir
          </a>
        </li>

        <li class="nav-item" id="unfollow">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/unfollow">
            <i class="fe fe-slash"></i> Deixar de Seguir
          </a>
        </li>

        <li class="nav-item" id="like">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/like">
            <i class="fe fe-thumbs-up"></i> Like
          </a>
        </li>

        <li class="nav-item" id="targetaudience">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/targetaudience">
            <i class="fe fe-target"></i> Público-alvo
          </a>
        </li>

        <!-- <li class="nav-item" id="targetaudience">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/followforce">
            <i class="fe fe-user-plus"></i> Não deixar de seguir
          </a>
        </li>

        <li class="nav-item" id="targetaudience">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/nounfollow">
            <i class="fe fe-user-minus"></i> Não seguir
          </a>
        </li>

        </li> -->
        <li class="nav-item" id="targetaudience">
          <!-- <a class="nav-link " href="<?php echo BASE_URL; ?>/fans" data-toggle="tooltip" title="Essa opção pode levar muito tempo para carregar. Estamos carregando todos os perfis que gostaram de suas publicações.">
            <i class="fe fe-user-check"></i> Meus Fãs <span class="badge badge-success ml-3"> Novo </span>
          </a> -->

          <hr class="navbar-divider my-3">

          <?php


          if ($_SESSION['account']['type'] == 3) { ?>
        <li class="nav-item" id="profile">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/profile/premium">
            <i class="fe fe-users"></i> Perfis
          </a>
        </li>
      <?php } ?>

      <li class="nav-item" id="configuracao">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/configuracao">
          <i class="fe fe-user"></i> Perfil
        </a>
      </li>

      <li class="nav-item" id="plano">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/configuracao/plano">
          <i class="fe fe-dollar-sign"></i> Plano
        </a>
      </li>

      <li class="nav-item" id="logout">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/login/logout">
          <i class="fe fe-power"></i> Sair
        </a>
      </li>

      </ul>

    </div>

  </div>



  <script>
    $(document).ready(function() {
      let url = window.location.pathname;
      var nav = url.substr(1, (url.length - 1));
      var array = nav.split("/");
      var tamanho = array.length;
      var atual = array[tamanho - 1];

      var id = $("#" + atual).addClass("active");
      var id = $("#" + array[1]).addClass("active");

      if (atual == 'dashboard') {
        var id = $("#dashboard").addClass("active");
      }

      if (atual == 'unfollow') {
        var id = $("#unfollow").addClass("active");
      }
      if (atual == 'follow') {
        var id = $("#follow").addClass("active");
      }
      if (atual == 'like') {
        var id = $("#like").addClass("active");
      }
      if (atual == 'targetaudience') {
        var id = $("#targetaudience").addClass("active");
      }


    });
  </script>

</nav>