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
              <h3 class="card-title">User Message</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{route('message')}}" class="btn btn-info">Message</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>





                  <tr>
                    <td>1</td>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>
                      <a type="button" href="#" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                      <a type="button" href="#" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                      <a type="button" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>



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

{{-- {{route('delete', $data->id)}} --}}
