@extends('admin.admin_master')
@section('admin') 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Nombre de Joueur</p>
                              <h3 class="text-white mb-0 font-weight-500"> <small class="text-success"><i class="fa fa-caret-up"></i> </small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Nombre de Coach</p>
                              <h3 class="text-white mb-0 font-weight-500"> <small class="text-success"><i class="fa fa-caret-up"></i> </small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-info-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Nombre d'equipes</p>
                              <h3 class="text-white mb-0 font-weight-500"> <small class="text-danger"><i class="fa fa-caret-down"></i> </small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-danger-light rounded w-60 h-60">
                              <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Match Saison</p>
                              <h3 class="text-white mb-0 font-weight-500"> <small class="text-danger"><i class="fa fa-caret-up"></i></small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-xl-12 col-12">
                  <div class="box bg-info bg-img" style="background-image: url(../images/gallery/bg-1.png)">
                      <div class="box-body text-center">							
                          <img src="../images/trophy.png" class="mt-50" alt="" />
                          <div class="max-w-500 mx-auto">
                              <h2 class="text-white mb-20 font-weight-500">Meilleure Equipe,</h2>
                              <p class="text-white-50 mb-10 font-size-20"></p>
                          </div>
                      </div>
                  </div>
              </div>
              


          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection