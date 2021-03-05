<!-- End Top Navbar Area -->
@extends('layouts.dashboardLayout')

@section('content')


<!-- Breadcrumb Area -->
<div class="breadcrumb-area">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li class="item">
            <a href="/dashboard"><i class='bx bx-home-alt'></i></a>
        </li>
        <li class="item">Dashboard</li>
        <li class="item">Trade History</li>
    </ol>
</div>
<!-- End Breadcrumb Area -->



<!-- Stats Area -->
<div class="ecommerce-stats-area">
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="single-stats-card-box">
                <div class="icon">
                    <i class='bx bxs-user-check'></i>
                </div>
                <span class="sub-title">Balance</span>
                <h3>$0</h3>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="single-stats-card-box">
                <div class="icon">
                    <i class='bx bxs-badge-dollar'></i>
                </div>
                <span class="sub-title">Invested</span>
                <h3>$0</h3>
            </div>
        </div>

    </div>
</div>
<!-- End Stats Area -->

{{-- <div class="card mb-30">
        <div class="alert alert-info" role="alert"><p>No Data Available Yet!.</p></div>
    </div> --}}

<table class="table table-borderless">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<!-- Footer -->
<div class="flex-grow-1"></div>
@endsection
<!--End of Tawk.to Script-->
