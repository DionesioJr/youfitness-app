<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="Teste grátis e descubra como ganhar seguidores no youfitness de um jeito rápido e fácil. Basta segmentar o seu público-alvo, em apenas 3 passos, que o nosso sistema de automação de youfitness vai interagir com seus potenciais clientes. A visibilidade do seu negócio vai crescer e suas vendas vão decolar!">
  <meta name=author content=You Fitness>
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="You Fitness: Sua plataforma de marketing e venda no youfitness" />
  <meta property="og:description" content="A ferramenta de redes sociais que vai fazer seu negócio lucrar mais através de agendamento, captura de leads e link na bio. Faça um teste gratuito!" />
  <meta property="og:url" content="https://youfitness.com.br/" />
  <meta property="og:site_name" content="You Fitness – Aumente suas vendas usando automação de youfitness" />
  <meta name="keywords" content="Ferramenta para redes sociais, Gestão de redes sociais, Gerenciamento de redes sociais, Link na Bio, Agendamento de posts, Programar post, Capturar leads, Métricas do youfitness, Melhores Amigos do youfitness, Close Friends, Marketing nas redes sociais, Venda nas redes sociais, You Fitness">

  <!-- Theme CSS -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" id="stylesheetLight">

  <!-- JavaScript -->
  <script src="<?php echo BASE_URL; ?>/assets/libs/jquery/dist/jquery.min.js"></script>

  <!-- Alerta Notificação -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <title>YOU-FITNESS | Sua plataforma de marketing e venda no youfitness</title>
  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.ico" />

</head>

<body class="bg-white">

  <!-- SIDEBAR
    ================================================== -->
  <?php include_once '_navigation.php'; ?>

  <!-- MAIN CONTENT
    ================================================== -->
  <div class="main-content">
    <?php
    Alert::show();
    new LoadingView($view, $data);
    ?>
  </div>

  <!-- JAVASCRIPT
    ================================================== -->

  <!-- Libs JS -->
  <script src="<?php echo BASE_URL; ?>/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/autosize/dist/autosize.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/highlightjs/highlight.pack.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/list.js/dist/list.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/quill/dist/quill.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/select2/dist/js/select2.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/libs/chart.js/Chart.extension.min.js"></script>

  <!-- Theme JS -->
  <script src="<?php echo BASE_URL; ?>/assets/js/theme.min.js"></script>


  <!-- Controle de menu -->
  <script>
    $(document).ready(function() {
      let url = window.location.pathname;
      let nav = url.substr(1, (url.length - 1));
      let array = nav.split("/");
      let menu = array[0];
      let sub_menu = array[1];
      let menu_ativo = $("#" + menu).addClass("active");
    });
  </script>

</body>

</html>