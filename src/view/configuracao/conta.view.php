   <div class="page-header">
     <div class="row">
       <div class="col-lg-11">
         <h3>Configuração</h3>
       </div>
       <div class="col-lg-1 col-md-1 col-sm-1">
         <a href="<?php echo BASE_URL; ?>/aluno" type="button" class="btn btn-secondary">Voltar</a>
       </div>

     </div>
   </div>

   <div class=" bs-docs-section">

     <div class="row">
       <div class="col-lg-12">

         <div class="bs-component">


           <form action="<?php echo $data['action']; ?>" method="post">

             <fieldset>
               <legend>Dados Pessoais</legend>
               <div class="form-row">
                 <div class="form-group col-md-8">
                   <label for="Nome Completo">Nome Completo</label>
                   <input type="text" class="form-control" id="" required placeholder="João Alves">
                 </div>

                 <div class="form-group col-md-4">
                   <label for="Nome Completo">Idade</label>
                   <input type="number" class="form-control" required id="" placeholder="18">
                 </div>

                 <div class="form-group col-md-4">
                   <label for="Nome Completo">Peso</label>
                   <input type="number" class="form-control" required id="" placeholder="70">
                 </div>

                 <div class="form-group col-md-4">
                   <label for="Nome Completo">Altura</label>
                   <input type="number" class="form-control" required id="" placeholder="188">
                 </div>

                 <div class="form-group col-md-4">
                   <label for="inputEstado">Sexo</label>
                   <select id="inputEstado" required class="form-control">
                     <option selected>Escolher...</option>
                     <option>Masculino</option>
                     <option>Feminino</option>
                   </select>
                 </div>
               </div>
             </fieldset>

             <br>
             <hr>
             <br>


             <fieldset>
               <legend>Dados da Conta</legend>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="">Email</label>
                   <input type="email" class="form-control" id="" placeholder="Email">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">Senha</label>
                   <input type="password" class="form-control" id="" placeholder="Senha">
                 </div>
               </div>

             </fieldset>

             <br>
             <hr>
             <br>

             <fieldset>
               <legend>Endereço</legend>
               <div class="form-group">
                 <label for="inputAddress">Endereço</label>
                 <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="inputCity">Cidade</label>
                   <input type="text" class="form-control" id="inputCity">
                 </div>
                 <div class="form-group col-md-4">
                   <label for="inputEstado">Estado</label>
                   <select id="inputEstado" class="form-control">
                     <option selected>Escolher...</option>
                     <option>...</option>
                   </select>
                 </div>
                 <div class="form-group col-md-2">
                   <label for="inputCEP">CEP</label>
                   <input type="text" class="form-control" id="inputCEP">
                 </div>
               </div>
             </fieldset>

             <br>
             <button type="submit" class="btn btn-primary"><?php echo $data['button_submit'] ?></button>
           </form>

         </div>
       </div>

     </div>
   </div>





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