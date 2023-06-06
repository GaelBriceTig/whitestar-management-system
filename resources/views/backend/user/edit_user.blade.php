@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      
      <section class="content">





        <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Formulaire de Creation Utilisateur</h4>
          </div>

         <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">

                <form method="post" action="{{ route('users.update' ,$editData->id) }}">
                  @csrf

                  <div class="row">
                    <div class="col-6">		
                        <div class="row">
                            <div class="col-md-9">

                                <div class="form-group">
                                    <h5>Role Utilisateur <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="usertype" id="usertype" required="" class="form-control">
                                        <option value="" selected=""></option>
                                        <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected": "") }}>Administrateur</option>
                                        <option value="Manager" {{ ($editData->usertype == "Manager" ? "selected": "")}}>Manager</option>
                                        <option value="Coach" {{ ($editData->usertype == "Coach" ? "selected": "")}}>Coach</option>
                                        <option value="Coach" {{ ($editData->usertype == "Joueur" ? "selected": "")}}>Joueur</option>
                                        </select>
                                        <div class="help-block"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Nom: <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="familyname" class="form-control" value="{{ $editData->familyname }}" > </div>
                                    </div>
                                </div>

                            </div> <!--End-Col-Md-6-->

                            <div class="col-md-9">

                                
                                <div class="form-group">
                                    <h5>Prenom: <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" value="{{ $editData->name }}" > </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Email Utilisateur : <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control" value="{{ $editData->email }}" required="" > </div>
                                    </div>
                                </div>

                            </div>

                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Mettre à Jour">
                            </div>

                        </div>
                        <!-- /End.Row -->

                        

                    </form>
        
                </div>
                <!-- /.col -->
            </div>
           <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
   
      </section>

      






      
    
    </div>
</div>



@endsection