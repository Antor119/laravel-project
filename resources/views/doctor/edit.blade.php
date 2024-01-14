
@extends('pages.master')
 @section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('update', $edit->id)}}" method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">


                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" value="{{$edit->image}}">

                  </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="{{$edit->name}}">

                </div>



                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword1" value="{{$edit->title}}">

                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{$edit->description}}">

                  </div>


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>


  @endsection
  {{-- {{route('doctorCreate')}} --}}
