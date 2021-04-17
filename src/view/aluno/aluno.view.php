  <!-- HEADER -->
  <div class="header">
      <div class="container-fluid">

          <!-- Body -->
          <div class="header-body d-none d-sm-none d-md-block">
              <div class="row align-items-end">
                  <div class="col">

                      <!-- Title -->
                      <h1 class="header-title">
                          Público-alvo
                      </h1>
                  </div>
                  <!-- User -->
                  <div class="col-auto">
                      <div class="navbar-user">
                          <div class="dropdown">
                              <a href="" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="<?php echo $data['instagram']['profile_pic_url'] ?>" alt="..." class="avatar-img rounded-circle">
                              </a>
                          </div>
                      </div>
                  </div>
              </div> <!-- / .row -->
          </div> <!-- / .header-body -->

      </div>
  </div> <!-- / .header -->

  <!-- CARDS -->
  <div class="container-fluid">

      <div class="row">

          <div class="col-12 col-xl-12">

              <div class="card">
                  <div class="card-header">

                      <!-- Title -->
                      <h4 class="card-header-title d-none d-sm-none d-md-block">
                          Perfil
                      </h4>
                      <h4 class="card-header-title d-md-none">
                          Público-alvo
                      </h4>

                      <div class="row align-items-center">
                          <div class="col">

                          </div>
                          <div class="col-auto">

                              <!-- Button -->

                              <div class="dropdown">
                                  <!-- Button trigger modal -->
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                      Adicionar Referência
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Público-alvo</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>

                                              <form action="<?php echo BASE_URL; ?>/targetaudience/" method="POST">

                                                  <input type="hidden" name="save" value="1">
                                                  <div class="modal-body">
                                                      <p>Adicione um perfil para que nos possamos encontrar seu público alvo</p>
                                                      <input type="text" class="form-control" name="username" placeholder="@publicoalvo" id="">
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                      <input type="submit" class="btn btn-primary" value="Salvar" name="salvar">
                                                  </div>

                                              </form>
                                          </div>
                                      </div>
                                  </div>

                              </div>

                          </div>
                      </div>

                  </div>
                  <div class="table-responsive">
                      <table class="table table-sm table-hover card-table">
                          <thead>
                              <tr>
                                  <th>
                                      <a class=" text-muted">Perfil</a>
                                  </th>
                                  <th>
                                      <a class=" text-muted">Seguidores</a>
                                  </th>
                                  <th>
                                      <a class=" text-muted">Seguindo</a>
                                  </th>
                                  <th colspan="2">
                                      <a class=" text-muted">Data de Cadastro</a>
                                  </th>
                              </tr>
                          </thead>
                          <tbody class="list font-size-base">

                              <?php
                                foreach ($data["publictargets"]  as $key => $profile) {

                                ?>

                                  <tr>
                                      <td>

                                          <!-- Avatar -->
                                          <div class="avatar avatar-sm align-middle mr-2">
                                              <img class="avatar-img rounded-circle" src="<?php echo $profile['profile_pic_url'] ?>" alt="...">
                                          </div> <a class="item-name text-reset" target="_blank" href="https://instagram.com/<?php echo $profile['username'] ?>"><?php echo $profile['username'] ?></a>

                                      </td>

                                      <td>
                                          <span class="item-location"><?php echo $profile['followers'] ?></span>
                                      </td>
                                      <td>
                                          <span class="item-industry"><?php echo $profile['following'] ?></span>
                                      </td>

                                      <td>
                                          <time class=" item-created" datetime="2020-01-14"><?php echo $profile['created_at'] ?></time>
                                      </td>

                                      <td class="text-right">

                                          <!-- Dropdown -->
                                          <div class="dropdown">
                                              <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="fe fe-more-vertical"></i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right">

                                                  <a href="https://www.instagram.com/<?php echo $profile['username'] ?>" target="_blank" class="dropdown-item">
                                                      Visitar Perfil
                                                  </a>

                                                  <a href="<?php echo BASE_URL; ?>/targetaudience/delete/?id=<?php echo $profile['id'] ?>" class="dropdown-item">
                                                      Excluir
                                                  </a>

                                              </div>
                                          </div>

                                      </td>
                                  </tr>
                              <?php

                                }

                                ?>
                          </tbody>
                      </table>
                  </div>


              </div>


          </div>
      </div>
  </div>