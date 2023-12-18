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
            <div style="padding-bottom: 100px;padding-top:20px;" class="container-fluid">
                        <div class="row px-xl-5">
                            <div class="col-12">
                                <nav class="breadcrumb bg-light mb-30">
                                    <a class="breadcrumb-item text-dark" href="{{url('/home')}}">Dashboard</a>
                                    <span class="breadcrumb-item active">Orders</span>
                                </nav>
                            </div>
                        </div>
                    </div>

          
                <div style="padding-left:55px;" >
            
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card-body">
                        <h2 style="text-align: center;" class="toptext">Orders</h2>
                        <p class="card-description">All Orders</p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Total Products</th>
                                    <th>Total Price</th>
                                    <th>Payment Status</th>
                                    <th>Delivery Status</th>
                                    <th>Status</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $previousEmail = null;
                                $totalProducts = 0;
                                $totalPrice = 0;
                                @endphp
                                @forelse($order as $singleOrder)
                                @if($singleOrder->email !== $previousEmail)
                                @if($previousEmail !== null)
                                <tr class="parent-row" onclick="window.location.href='{{ url('orders', $previousEmail) }}';" style="cursor: pointer;">
                                    <td>{{ $singleOrder->name }}</td>
                                    <td>{{ $singleOrder->email }}</td>
                                    <td>{{ $totalProducts }}</td>
                                    <td>{{ $totalPrice }}</td>
                                    <td style="color: green; text-align:center;">{{ $singleOrder->payment_status }}</td>
                                    <td style="color: dodgerblue; text-align:center;">{{ $singleOrder->delivery_status }}</td>
                                    <td>
                                        @if($singleOrder->delivery_status === 'processing')
                                            <a class="btn btn-outline-dark" onclick="return confirm('Are you sure this product is done processing and on its way?')" href="{{ url('delivered', ['id' => $singleOrder->user_id]) }}">On Its Way</a>
                                        @elseif($singleOrder->delivery_status === 'On Its Way')
                                            <a class="btn btn-outline-success" onclick="return confirm('Are you sure this product has been delivered?')" href="{{ url('delivered', ['id' => $singleOrder->user_id]) }}">Delivered</a>
                                        @else
                                            <p>Delivered</p>
                                        @endif
                                    </td>
                                    
                                </tr>
                                @endif
                                @php
                                $totalProducts = 0;
                                $totalPrice = 0;
                                @endphp
                                @endif
                                @php
                                $totalProducts += $singleOrder->quantity;
                                $totalPrice += ($singleOrder->quantity * $singleOrder->price);
                                $previousEmail = $singleOrder->email;
                                @endphp
                                @empty
                                <tr>
                                    <td colspan="8" style="color: red; text-align:center;">
                                        No Data Found
                                    </td>
                                </tr>
                                @endforelse
                                @if($previousEmail !== null)
                                <tr class="parent-row" onclick="window.location.href='{{ url('orders', $previousEmail) }}';" style="cursor: pointer;">
                                    <td>{{ $singleOrder->name }}</td>
                                    <td>{{ $singleOrder->email }}</td>
                                    <td>{{ $totalProducts }}</td>
                                    <td>${{ $totalPrice }}.00</td>
                                    <td style="color: green; text-align:center;">{{ $singleOrder->payment_status }}</td>
                                    <td style="color: dodgerblue; text-align:center;">{{ $singleOrder->delivery_status }}</td>
                                    <td>
                                        @if($singleOrder->delivery_status === 'processing')
                                            <a class="btn btn-outline-dark" onclick="return confirm('Are you sure this product is done processing and on its way?')" href="{{ url('coming', ['id' => $singleOrder->user_id]) }}">On Its Way</a>
                                        @elseif($singleOrder->delivery_status === 'On Its Way')
                                            <a class="btn btn-outline-success" onclick="return confirm('Are you sure this product has been delivered?')" href="{{ url('delivered', ['id' => $singleOrder->user_id]) }}">Delivered</a>
                                        @else
                                            <p>Delivered</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-info" href="{{ url('print_pdf', $singleOrder->id) }}">Print PDF</a>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
          
            
                

            </div>
            
        
        </div>
        
      
    </div>
    @include('superAdmin.footer')
    
    @include('superAdmin.js.dashboard')

  </body>

</html>