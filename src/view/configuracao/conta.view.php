   <!-- HEADER -->
   <div class="header">
     <div class="container-fluid">

       <!-- Body -->
       <div class="header-body d-none d-sm-none d-md-block">
         <div class="row align-items-end">
           <div class="col">

             <!-- Title -->
             <h1 class="header-title">
               Configuração
             </h1>
           </div>
           <!-- User -->
           <div class="col-auto">
             <div class="navbar-user">
               <div class="dropdown">
                 <a href="" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <img src="<?php echo $data['youfitness']['profile_pic_url'] ?>" alt="..." class="avatar-img rounded-circle">
                 </a>
                 <!-- Menu -->
                 <!-- <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?php echo BASE_URL; ?>/configuracao/perfil" class="dropdown-item"><i class="fe fe-user"></i> Perfil</a>
                    <a href="<?php echo BASE_URL; ?>/configuracao" class="dropdown-item"><i class="fe fe-settings"></i> Configuração</a>
                    <hr class="dropdown-divider">
                    <a href="<?php echo BASE_URL; ?>/login/logout" class="dropdown-item"><i class="fe fe-power"></i> Sair </a>
                </div> -->
               </div>
             </div>
           </div>
         </div> <!-- / .row -->

         <div class="row align-items-center">
           <div class="col">

             <!-- Nav -->
             <ul class="nav nav-tabs nav-overflow header-tabs">
               <li class="nav-item">
                 <a href="<?php echo BASE_URL; ?>/configuracao/conta" class="nav-link active">
                   Conta
                 </a>
               </li>



             </ul>

           </div>
         </div>


       </div> <!-- / .header-body -->

     </div>
   </div> <!-- / .header -->


   <div class="container-fluid">
     <div class="row justify-content-center">
       <div class="col-12 col-lg-10 col-xl-12">

         <div class="row justify-content-between align-items-center">
           <div class="col">
             <div class="row align-items-center">
               <div class="col-auto">

                 <!-- Avatar -->
                 <div class="avatar">
                   <img class="avatar-img rounded-circle" src="<?php echo $data['youfitness']['profile_pic_url'] ?>" alt="...">
                 </div>

               </div>
               <div class="col ml-n2">

                 <!-- Heading -->
                 <h4 class="mb-1">
                   <?php echo $data['youfitness']['full_name'] ?>
                 </h4>

                 <!-- Text -->
                 <small class="text-muted">
                   <?php echo $data['youfitness']['biography'] ?>
                 </small>

               </div>
             </div> <!-- / .row -->
           </div>
           <div class="col-auto">

             <!-- Button -->
             <!-- <button class="btn btn-sm btn-primary">
                 Upload
               </button> -->

           </div>
         </div> <!-- / .row -->

         <!-- Divider -->
         <hr class="my-5">


         <div class="row d-none">
           <div class="col-12 col-md-6">

             <!-- Public profile -->
             <div class="form-group">

               <!-- Label -->
               <label class="mb-1">
                 Public profile
               </label>

               <!-- Form text -->
               <small class="form-text text-muted">
                 Making your profile public means that anyone on the Dashkit network will be able to find you.
               </small>

               <div class="row">
                 <div class="col-auto">

                   <!-- Switch -->
                   <div class="custom-control custom-switch">
                     <input type="checkbox" class="custom-control-input" id="switchOne">
                     <label class="custom-control-label" for="switchOne"></label>
                   </div>

                 </div>
                 <div class="col ml-n2">

                   <!-- Help text -->
                   <small class="text-muted">
                     You're currently invisible
                   </small>

                 </div>
               </div> <!-- / .row -->
             </div>

           </div>
           <div class="col-12 col-md-6">

             <!-- Allow for additional Bookings -->
             <div class="form-group">

               <!-- Label -->
               <label class="mb-1">
                 Allow for additional Bookings
               </label>

               <!-- Form text -->
               <small class="form-text text-muted">
                 If you are available for hire outside of the current situation, you can encourage others to hire you.
               </small>

               <div class="row">
                 <div class="col-auto">

                   <!-- Switch -->
                   <div class="custom-control custom-switch">
                     <input type="checkbox" class="custom-control-input" id="switchTwo" checked="">
                     <label class="custom-control-label" for="switchTwo"></label>
                   </div>

                 </div>
                 <div class="col ml-n2">

                   <!-- Help text -->
                   <small class="text-muted">
                     You're currently available
                   </small>

                 </div>
               </div> <!-- / .row -->
             </div>

           </div>
         </div> <!-- / .row -->




         <div class="row justify-content-center">
           <div class="col-12 col-lg-10 col-xl-12">

             <div class="row justify-content-between align-items-center mb-5">
               <div class="col-12 col-md-9 col-xl-7">

                 <!-- Heading -->
                 <h2 class="mb-2">
                   Atualize sua senha do youfitness
                 </h2>

                 <!-- Text -->
                 <!-- <p class="text-muted mb-xl-0">
             </p> -->

               </div>

             </div> <!-- / .row -->

             <div class="row">
               <div class="col-12 col-md-6 order-md-2">

                 <!-- Card -->
                 <div class="card bg-light border ml-md-4">
                   <div class="card-body">

                     <!-- Text -->
                     <p class="mb-2">
                       Atenção
                     </p>

                     <!-- Text -->
                     <p class="small text-muted mb-2">
                       A senha deve ser modificada com a mesma senha usada para fazer login no youfitness, para que a automação não pare.
                     </p>

                   </div>
                 </div>

               </div>
               <div class="col-12 col-md-6">

                 <!-- Form -->
                 <form action="<?php echo BASE_URL; ?>/profile/updatepassword" method="POST">

                   <!-- New password -->
                   <div class="form-group">

                     <!-- Label -->
                     <label>
                       Nova senha
                     </label>

                     <!-- Input -->
                     <input type="password" name="password_1" class="form-control">

                   </div>

                   <!-- Confirm new password -->
                   <div class="form-group">

                     <!-- Label -->
                     <label>
                       Confirme a nova senha
                     </label>

                     <!-- Input -->
                     <input type="password" name="password_2" class="form-control">

                   </div>

                   <!-- Submit -->
                   <input class="btn btn-block btn-primary lift" type="submit" value="Atualizar Senha">


                 </form>

               </div>
             </div> <!-- / .row -->

             <!-- Divider -->
             <hr class="my-5">


             <br>

           </div>

           <br><br>

         </div>




         <div class="row justify-content-center">
           <div class="col-12 col-lg-11 col-xl-12">



             <div class="">

               <h4>
                 Detalhes das Faturas
               </h4>

               <div class="row mt-4">
                 <div class="col-12 col-md-12">

                   <div class="table-responsive">
                     <table class="table table-sm table-nowrap card-table">
                       <thead>
                         <tr>
                           <th>Descrição</th>
                           <th>Periodo</th>
                           <th>Status</th>
                           <th>Total</th>
                         </tr>
                       </thead>
                       <tbody class="font-size-base">

                         <?php
                          if (isset($data['charges'])) {
                            foreach ($data['charges'] as $key => $charges) {
                          ?>
                             <tr>
                               <td>
                                 Serviço de automação online
                               </td>
                               <td>
                                 De <?php echo $charges['first_period'] ?> até <?php echo $charges['final_period'] ?>
                               </td>
                               <td>
                                 <?php echo $charges['status_name'] ?>
                               </td>
                               <td>
                                 <span>R$ <?php echo $charges['value'] ?></span>
                               </td>
                             </tr>

                         <?php
                            }
                          }
                          ?>

                       </tbody>
                     </table>
                   </div>

                 </div>

               </div> <!-- / .row -->

               <!-- Divider -->
               <hr class="mt-4 mb-5">
             </div>

             <div class="text-left">

               <div class="alert alert-warning alert-dismissible fade show" role="alert">

                 <p class="my-3">
                   <strong>Atenção:</strong>
                   Após confirmação do pagamento, sua fatura será lançada.
                 </p>
               </div>
             </div>



             <br><br>
           </div>
         </div>






         <div class="row justify-content-between ">
           <div class="col-12 col-md-6">

             <!-- Heading -->
             <h4>
               Deletar sua conta
             </h4>

             <!-- Text -->
             <p class="small text-muted mb-md-0">
               A exclusão de sua conta é uma ação permanente e não será recuperável após a conclusão.
             </p>

           </div>
           <div class="col-auto">

             <!-- Button -->
             <a href="configuracao/apagar" class="btn btn-danger">
               Apagar conta
             </a>

           </div>
         </div>


         <br><br>

       </div>
     </div> <!-- / .row -->
   </div>