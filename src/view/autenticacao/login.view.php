<!doctype html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="Conquiste seguidores reais no youfitness para aumentar a visibilidade do seu negócio usando o YOU-FITNESS" class="next-head" />
  <meta property="og:url" content="<?php echo BASE_URL; ?>" class="next-head" />
  <meta property="og:type" content="website" class="next-head" />
  <meta property="og:title" content="YOU-FITNESS | Login" class="next-head" />
  <meta property="og:description" content="Conquiste seguidores reais no youfitness para aumentar a visibilidade do seu negócio usando o YOU-FITNESS" class="next-head" />
  <meta property="og:image" content="<?php echo BASE_URL; ?>/assets/img/logo.png" class="next-head" />
  <meta property="og:image:alt" content="YOU-FITNESS" class="next-head" />
  <meta property="og:image:width" content="1200" class="next-head" />
  <meta property="og:image:height" content="1200" class="next-head" />
  <meta property="og:locale" content="pt_BR" class="next-head" />
  <meta property="og:site_name" content="YOU-FITNESS" class="next-head" />

  <!-- Theme CSS -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css" id="stylesheetLight"> -->
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" id="stylesheetLight">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/login.css" id="stylesheetLight">

  <!-- jquery -->
  <script src="<?php echo BASE_URL; ?>/assets/libs/jquery/dist/jquery.min.js"></script>

  <!-- Alerta Notificação -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



  <style>
    body {
      display: none;
    }
  </style>

  <title>YOU-FITNESS | Login</title>
  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.ico" />
</head>

<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary ">

  <?php
  Alert::show();
  ?>

  <div class="filter-black">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 col-md-5 col-xl-4 my-5">

          <!-- Image -->
          <div class="text-center text-white">
            <!-- <img src="<?php echo BASE_URL; ?>/assets/img/logo.png" alt="..." class="img-fluid""> -->
            <h1>YOU FITNESS</h1>
          </div>
          <br>

          <!-- Heading -->
          <h3 class=" mb-3 text-center text-white">
            Bem vindos!
          </h3>
          <p class="text-muted  mb-3 ">
            O You Fitness trabalha 24 horas por dia para o seu treino.
          </p>

          <hr>

          <!-- Form -->

          <form action="<?php echo BASE_URL; ?>/login/autenticacao/" method="POST">

            <!-- Email address -->
            <div class="form-group">

              <!-- Input -->
              <input type="email" name="email" class="form-control" placeholder="E-mail" required autocomplete="off">

            </div>

            <!-- Password -->
            <div class="form-group">

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" name="password" class="form-control form-control-appended" placeholder="Senha" required autocomplete="off">
              </div>
            </div>

            <!-- Submit -->
            <input type="submit" value="Entrar" class="btn btn-lg btn-block btn-warning mb-3">


            <!-- Link -->
            <div class="text-left">
              <small class="text-muted ">
                <!-- <a href="#" class="form-text small text-muted">
                Esqueceu sua senha?
              </a> -->
              </small>

            </div>

          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </div>


</body>

</html>