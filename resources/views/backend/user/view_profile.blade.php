@extends('admin.admin_master')
@section('admin')  


<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-12">

                <div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;">
                        <h3 class="widget-user-username"> {{ $user->familyname }} {{ $user->name }}</h3>
                        
                        <a href="{{ route('profile.edit') }}" style="float:right;" class="btn btn-rounded btn-success mb-5"> Modifier mon Profil </a>
                        
                        <h6 class="widget-user-desc">{{ $user->usertype }}</h6>
                        <h6 class="widget-user-desc">{{ $user->email }}</h6>

                        
					</div>
					<div class="widget-user-image">
					    <img class="rounded-circle" 
                        src="{{ (!empty($user->image)) ? url('upload/user_images/'.$user->image): url('upload/avatar.png') }}" alt="Image Profil">
					</div>
					<div class="box-footer">
                        <div class="row">
                            <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">Numero de Telephone</h5>
                                <span class="description-text">{{ $user->mobile }}</span>
                            </div>
                            <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 br-1 bl-1">
                            <div class="description-block">
                                <h5 class="description-header">Adresse</h5>
                                <span class="description-text">{{ $user->adress }}</span>
                            </div>
                            <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">Genre</h5>
                                <span class="description-text">{{ $user->gender }}</span>
                            </div>
                            <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
					</div>
				  </div> 
        

        
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
      <!-- /.content -->
    
    </div>
</div>




@endsection