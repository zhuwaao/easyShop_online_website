<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>easyShop Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- End layout styles -->
    <link rel="" href="" />
    @include('admin.css.dashboard')

  </head>


  <body>
    <div class="container-scroller">
      
      @include('admin.nav')
      
        <div class="container-fluid page-body-wrapper">
        
            @include('admin.sidebar')

            <div class="main-panel">
              @if(session()->has('message'))

              <div class="alert alert-success" >

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>

                {{session()->get('message')}}

              </div>

              @endif

              <div class="container-fluid">
                    <div class="row px-xl-5">
                        <div class="col-12">
                            <nav class="breadcrumb bg-light mb-30">
                                <a class="breadcrumb-item text-dark" href="{{url('/home')}}">Dashboard</a>
                                <span class="breadcrumb-item active">Categories</span>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="toptext" >
                    <h2 class="h2-font" >Add Category</h2>
                </div>

                <div class="search-field d-none d-md-block">
                    <form style="padding-bottom: 30px;" class="d-flex align-items-center h-100" action="{{url('/add_category')}}" method="POST" >
                        @csrf
                        <div class="input-group" style="padding-left :100px;width:300px;">
                            <div class="input-group-prepend bg-transparent">
                                
                            </div>
                            <input type="text" class="form-control bg-transparent border-7" name="category" placeholder="add category">
                        </div>
                        <div style="align-items:centre;">
                            <input  type="submit" class="btn btn-outline-success" name="submit" value="Add Category" >
                        </div>
                    </form>
                </div>

                
                <div class="col-lg-6 grid-margin stretch-card" style="padding-left: 100px;" >
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                    <br>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Category Name</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($data as $data)

                        <tr>
                          <td>{{$data->category_name}}</td>
                          <td >
                            <a onclick="return confirm('Are you sure to Delete This?')" class="btn btn-outline-danger" href="{{url('delete_category',$data->id)}}"><i class="mdi mdi-delete-forever"></i> delete</a>
                          </td>
                
                        </tr>
                        

                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                
          

                @include('admin.footer')

            </div>
        
        </div>
      
    </div>
    
    @include('admin.js.dashboard')

  </body>

</html>