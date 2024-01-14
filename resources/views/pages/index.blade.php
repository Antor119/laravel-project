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
              <h3 class="card-title">Doctor List</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{route('doctor.create')}}" class="btn btn-info">Add Doctor</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr style="background-color: rgb(0, 255, 76)">
                    <th>Sl</th>
                    <th>Image</th>
                    <th>name</th>
                    <th>Title</th>
                    <th>Description</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($key as $data)



                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{$data->image}}" width="90px"  heigh="70px" alt="no image" /></td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td>
                      <a type="button" href="{{route('edit', $data->id)}}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                      <a type="button" href="#" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                      <a type="button" href="{{route('delete', $data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
