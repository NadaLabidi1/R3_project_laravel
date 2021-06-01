<x-app-layout>
    <x-slot name="slot">

        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                  <h1 class="m-0">Information</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>

          <section class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h3>
                          Project List
                          <a class="btn btn-success float-right btn-sm" href="{{ route('add.information') }}" ><i class="fa fa-list"></i> Add</a>
                      </h3>
                  </div>

              <div class="card-body">
                <table id="myTable" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                    <tr>
                      <th style="font-size: 12px">s1. No</th>
                      <th style="font-size: 12px">Name</th>
                      <th style="font-size: 12px">Address</th>
                      <th style="font-size: 12px">Image</th>
                      <th style="font-size: 12px">Actions</th>
                    </tr>
                    </thead>
                    @foreach ( $alldata as $key => $data )


                    <tr class="">
                      <td>{{ $key+1 }}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->address }}</td>
                      <td><a href="{{(!empty($data->image))?url('upload/'.$data->image):url('upload/no_image.png')}}"><img src="{{(!empty($data->image))?url('upload/'.$data->image):url('upload/no_image.png') }}" style="width: 100px; height : 90px; border 1px solid #000;"></a></td>
                      <td><a title="Edit"  class="btn btn-sm btn-primary" href="{{ route('edit.information',$data->id) }}">Edit</a>
                        <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('delete.information',$data->id) }}"> Delete </a>
                    </td>


                    </tr>
                    @endforeach
                </table>

              </div>
              </div>


          </section>


          </div>
    </x-slot>


</x-app-layout>
