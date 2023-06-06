@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
    <section class="content">
        <div class="row">

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Liste Des Joueur</h3>
                <a href="{{ route('player.team.add') }}" style="float:right;" class="btn btn-rounded btn-success mb-5"> Ajout des equipes  </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                                <tr>
                                        <th width="5%">Id</th>
                                        <th>Nom</th>
                                        <th width="15%">action</th>
                                </tr>
                        </thead>
                        <tbody>

                            @foreach ($allData as $key => $player)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $player  ->name }}</td>
                                <td>
                                    <a href="{{ route('player.team.edit', $player->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('player.team.delete', $player->id) }}" class="btn btn-danger" id="delete">Delete</a>
                                </td>
                            </tr>


                            @endforeach
                            
                            
                        </tbody>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
      <!-- /.content -->
    
    </div>
</div>


@endsection