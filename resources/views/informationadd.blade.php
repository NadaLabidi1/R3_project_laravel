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
                  <h1 class="m-0 text-dark">
                      @if (@isset($editData))
                      Edit Information
                      @else
                      Insert Information
                      @endif
                    </h1>
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
                      <h1>Type Information</h1>
                  </div>
              </div>
              <div class="card-body">
                  <form method="POST" action="{{ (@$editData)?route('update.information', $editData->id): route('store.information') }}" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Name</label>
                              <input type="text" name="name" class="form-control" value="{{ (@$editData->name) }}" placeholder="name">
                              <font style="color: red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ (@$editData->address) }}"placeholder="address" >
                            <font style="color: red">{{ ($errors->has('address'))?($errors->first('address')):'' }}</font>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                            <font style="color: red">{{ ($errors->has('image'))?($errors->first('image')):'' }}</font>
                        </div>
                        <div class="form-group col-md-6">
                            <img src="{{ !empty ($editData->image)?url('upload/'.$editData->image): url('upload/no-image.png')}} " id="showImage" name="file" alt="" style="width: 150px; height: 160px; border: 1px solid #000" >

                        </div>

                      </div>
                      <button type="submit" class="btn btn-primary">{{ (@$editData)?'Update':'Submit'}}  </button>
                  </form>
              </div>

          </section>


          </div>
    </x-slot>


</x-app-layout>
