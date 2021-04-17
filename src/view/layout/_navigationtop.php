<nav class="navbar navbar-expand-lg navbar-light" id="topnav">
  <div class="container">

    <!-- Toggler -->
    <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>




    <!-- User -->
    <div class="col-auto d-none d-md-flex">
      <div class="navbar-user">
        <div class="dropdown">
          <a href="" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo $data['youfitness']['profile_pic_url'] ?>" alt="..." class="avatar-img rounded-circle">
          </a>
          <!-- Menu -->
          <div class="dropdown-menu dropdown-menu-right">
            <a href="configuracao/perfil" class="dropdown-item"><i class="fe fe-user"></i> Perfil</a>
            <a href="configuracao" class="dropdown-item"><i class="fe fe-settings"></i> Configuração</a>
            <hr class="dropdown-divider">
            <a href="login" class="dropdown-item"><i class="fe fe-power"></i> Sair </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Collapse -->
    <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">
      <!-- Brand -->
      <a class="navbar-brand mr-auto" href="">
        <img src="./assets/img/logo.png" alt="..." class="navbar-brand-img">
      </a>


      <!-- Navigation -->
      <ul class="navbar-nav mr-auto">



      </ul>

    </div>

  </div> <!-- / .container -->
</nav>