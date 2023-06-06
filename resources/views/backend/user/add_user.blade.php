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

                <form method="POST" action="{{ route('users.store') }}">
                  @csrf

                  <div class="row">
                  <div class="col-12">		
                    <div class="row">
                      <div class="col-md-6">

                        <div class="form-group">
                          <h5>Role Utilisateur <span class="text-danger">*</span></h5>
                          <div class="controls">
                            <select name="usertype" id="usertype" required="" class="form-control">
                              <option value="">Selection la Fonction</option>
                              <option value="Admin">Administrateur</option>
                              <option value="Manager">Manager</option>
                              <option value="Coach">Coach</option>
                              <option value="Joueur">Joueur</option>
                            </select>
                            <div class="help-block"></div>
                          </div>
                        </div>

                      </div> <!--End-Col-Md-6-->

                      <div class="col-md-6">

                        <div class="form-group">
                          <h5>Nom: <span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="text" name="familyname" class="form-control" required="Il faut remplir ce champ" > <div class="help-block"></div>
                          </div>
                        </div>

                        <div class="form-group">
                          <h5>Prenom: <span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="text" name="name" class="form-control" required="Il faut remplir ce champ" > <div class="help-block"></div>
                          </div>
                        </div>

                      </div>

                    </div>
                    <!-- /End.Row -->

                    
                    <div class="form-group">
                      <h5>Email Utilisateur : <span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="email" name="email" class="form-control" required="Adresse Mail important" > <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                      <h5>Mot de Passe : <span class="text-danger">
                      </span></h5>
                        <div class="controls">
                          <input type="password" id="password" name="password" class="form-control" required="Ce Champ est Important"> <div class="help-block"></div>
                        </div>
                        
                    </div> 

                    <div class="text-xs-right">
                      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                    </div>

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

<script>
  
  /*$(document).ready(function() {
    function generatePassword(){
      let charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789__!@#$%^&*()<>?";
      let password = "";
      let length = 12;

      for(let i =0, i < length; i++){
        password += charset.charAt(Math.floor(Math.random()* charset.length));
    }

    return password;
  }

  // sets password input fields
  $('.generate-password').on('click',function(){

    let password = generatePassword();

    $('#password').val(password);
  });

  


});*/


</script>

@endsection
