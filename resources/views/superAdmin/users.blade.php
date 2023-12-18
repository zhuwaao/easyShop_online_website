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

  </head>


  <body>
    <div class="container-scroller">
      
      @include('superAdmin.nav')
      
        <div class="container-fluid page-body-wrapper">
        
            @include('superAdmin.sidebar')

            <div class="main-panel">
                @if(session()->has('message'))

                    <div class="alert alert-success" >

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>

                        {{session()->get('message')}}

                    </div>

                    @endif
          

          
                <div style="padding-left:55px;" >
            
                    
                        
                        <div class="card-body">
                                <!-- B2B Request Table -->
                                
                                    <h4 class="card-title">B2B Request</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                        <thead>
                                            <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>ID Number</th>
                                            <th>Image</th> <!-- New column for displaying the image -->
                                            <th>User Type</th>
                                            <th>Change User Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            @if ($user->id_number !== null && $user->usertype !== 'B2B')
                                                <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->id_number }}</td>
                                                <td>
                                                    @if ($user->id_picture !== null)
                                                        <a href="/images/{{$user->id_picture}}" target="_blank">
                                                            <img src="/images/{{$user->id_picture}}">
                                                        </a>
                                                    @else
                                                        No image
                                                    @endif
                                                </td>
                                                <td style="color: red;" >{{$user->usertype}}</td>
                                                <td >
                                                    <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_superAdmin',$user->id)}}">Make SuperAdmin</a>
                                                
                                                    <a class="btn btn-outline-info" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_admin',$user->id)}}">Make Admin</a>
                                                
                                                    <a class="btn btn-outline-success" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_b2b',$user->id)}}">Make B2B</a>
                                                
                                                    <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_user',$user->id)}}">Make User</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-danger" onclick="return confirm('Are you Sure to Delete this User!')" href="{{url('/delete_user',$user->id)}}">Delete</a>
                                                </td>
                                                </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                        </table>
                                    
                                </div>
                                
                            <h2 style="text-align: center;padding-top:30px;" class="toptext">Super Admin Users</h2>
                            <p class="card-description"> All super admin users
                            </p>
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th style="text-align:center;" >Change User Type</th>
                                <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            @foreach($superAdminUsers as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td >{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td style="color: red;" >{{$user->usertype}}</td>
                                    <td >
                                        <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_superAdmin',$user->id)}}">Make SuperAdmin</a>
                                    
                                        <a class="btn btn-outline-info" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_admin',$user->id)}}">Make Admin</a>
                                    
                                        <a class="btn btn-outline-success" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_b2b',$user->id)}}">Make B2B</a>
                                    
                                        <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_user',$user->id)}}">Make User</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger" onclick="return confirm('Are you Sure to Delete this User!')" href="{{url('/delete_user',$user->id)}}">Delete</a>
                                    </td>
                                </tr>
                            
                            @endforeach   
                                <!-- <tr>
                                    <td colspan="16" style="color: red;text-align:center;" >
                                    No Data Found
                                    </td> -->
                                
                               
                            </tbody>
                            </table>
                        </div>
                        
                        <div style="padding-top: 120px;" class="card-body">
                            <h2 style="text-align: center;" class="toptext">Admin Users</h2>
                            <p class="card-description"> All admin users
                            </p>
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th style="text-align:center;" >Change User Type</th>
                                <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($adminUsers as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td >{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->usertype}}</td>
                                    <td >
                                        <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_superAdmin',$user->id)}}">Make SuperAdmin</a>
                                    
                                        <a class="btn btn-outline-info" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_admin',$user->id)}}">Make Admin</a>
                                    
                                        <a class="btn btn-outline-success" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_b2b',$user->id)}}">Make B2B</a>
                                    
                                        <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_user',$user->id)}}">Make User</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger" onclick="return confirm('Are you Sure to Delete this User!')" href="{{url('/delete_user',$user->id)}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                                <!-- <tr>
                                    <td colspan="16" style="color: red;text-align:center;" >
                                    No Data Found
                                    </td> -->
                                
                               
                            </tbody>
                            </table>
                        </div>
                        
                        <div style="padding-top: 120px;" class="card-body">
                            <h2 style="text-align: center;" class="toptext">B2B Users</h2>
                            <p class="card-description"> All B2B Users
                            </p>
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>National ID</th>
                                <th>ID Image</th>
                                <th style="text-align:center;" >Change User Type</th>
                                <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($b2b as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->usertype}}</td>
                                    <td>{{$user->phone_number}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->id_number}}</td>
                                    <td>
                                        @if ($user->id_picture !== null)
                                            <a href="/images/{{$user->id_picture}}" target="_blank">
                                                <img src="/images/{{$user->id_picture}}">
                                            </a>
                                        @else
                                            No image
                                        @endif
                                    </td>
                                    <td >
                                        <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_superAdmin',$user->id)}}">SuperAdmin</a>
                                    
                                        <a class="btn btn-outline-info" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_admin',$user->id)}}">Admin</a>
                                    
                                        <a class="btn btn-outline-success" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_b2b',$user->id)}}">B2B</a>
                                    
                                        <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_user',$user->id)}}">User</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger" onclick="return confirm('Are you Sure to Delete this User!')" href="{{url('/delete_user',$user->id)}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                                <!-- <tr>
                                    <td colspan="16" style="color: red;text-align:center;" >
                                    No Data Found
                                    </td> -->
                                
                               
                            </tbody>
                            </table>
                        </div>
                        <div style="padding-top: 120px;" class="card-body">
                            <h2 style="text-align: center;" class="toptext">Users</h2>
                            <p class="card-description"> All users
                            </p>
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th style="text-align:center;" >Change User Type</th>
                                <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user) 
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td >{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td >
                                        <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_superAdmin',$user->id)}}">Make SuperAdmin</a>
                                    
                                        <a class="btn btn-outline-info" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_admin',$user->id)}}">Make Admin</a>
                                    
                                        <a class="btn btn-outline-success" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_b2b',$user->id)}}">Make B2B</a>
                                    
                                        <a class="btn btn-outline-dark" onclick="return confirm('Are you Sure to make this Change!!?')" href="{{url('/make_user',$user->id)}}">Make User</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger" onclick="return confirm('Are you Sure to Delete this User!')" href="{{url('/delete_user',$user->id)}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                                <!-- <tr>
                                    <td colspan="16" style="color: red;text-align:center;" >
                                    No Data Found
                                    </td> -->
                                
                               
                            </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
          

                

            </div>
            @include('superAdmin.footer')
        
        </div>
      
    </div>
    
    @include('superAdmin.js.dashboard')

  </body>

</html>