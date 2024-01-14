@extends('pages.master')
 @section('content')

 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Service</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{route('service.create')}}" class="btn btn-info">Service List</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>

                    <th>Title</th>
                    <th>Description</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($key as $service3)



                  <tr>
                    <td>{{$loop->iteration}}</td>


                    <td>{{$service3->title}}</td>
                    <td>{{$service3->description}}</td>
                    <td>
                      <a type="button" href="#" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                      <a type="button" href="#" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                      <a type="button" href="{{route('delete', $service3->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>

                    @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection


