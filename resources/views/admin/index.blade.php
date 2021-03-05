@extends('layouts.adminLayout')

<!-- Main Content Layout -->
<!-- Welcome Area -->
@section('content')

    <div class="welcome-area">
        <div class="row m-0 align-items-center">
            <div class="col-lg-5 col-md-12 p-0">
                <div class="welcome-content">
                    <h1 class="mb-2">Hi, Welcome back cipher!</h1>
                    <p class="mb-0">Just Do Somethings Better</p>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 p-0">
                <div class="welcome-img">
                    <img src="/dassets/img/welcome-img.png" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- End Welcome Area -->

    <!-- Stats Area -->
    <div class="ecommerce-stats-area">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bxs-user-check'></i>
                    </div>
                    <span class="sub-title">Balance</span>
                    <h3 class="row">
                        <span class="col-8"> 398</span>
                        <small class="col-4 text-small" 
                        style="font-size: xx-small;">
                            AMP <br>
                            230.10 <br>
                            +10.5 <br>
                        </small>
                    </h3>
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

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-purchase-tag'></i>
                    </div>
                    <span class="sub-title">Country</span>
                    <h3>nigeria</h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-shopping-bag'></i>
                    </div>
                    <span class="sub-title">Last login</span>
                    <h3> seconds</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Stats Area -->

    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                {{-- <th scope="col" style="text-align: center" colspan="2">Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
                <th><button type="submit" name="btc_submit" class="btn btn-primary">Edit</button></th>
            </tr>
        </tbody>
    </table>
@endsection

<!-- Footer -->
<div class="flex-grow-1"></div>
<!-- End Footer -->

<!-- End Main Content Wrapper -->
