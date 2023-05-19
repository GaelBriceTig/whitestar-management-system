@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      
      <section class="content">


        <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Mettre à Jour le Mot de Passe</h4>
          </div>

         <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">

                <form method="POST" action="{{ route('users.store') }}">
                  @csrf

                    

                    <div class="form-group">
                      <h5>Mot de Passe Actuelle : <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="password" name="oldPassword" id="current_password" class="form-control"> <div class="help-block"></div>
                            @error('oldPassword')
                                <span class="text-danger"> {{ $message }}</span>  
                            @enderror
                        </div>
                    </div> 

                    <div class="form-group">
                        <h5>Nouveau Mot de Passe : <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password" id="password" class="form-control"> <div class="help-block"></div>
                                @error('password')
                                    <span class="text-danger"> {{ $message }}</span>  
                                @enderror
                            </div>
                      </div> 

                      <div class="form-group">
                        <h5> Confirme le Mot de Passe : <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" > <div class="help-block"></div>
                                @error('password_confirmation')
                                    <span class="text-danger"> {{ $message }}</span>  
                                @enderror
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



@endsection
