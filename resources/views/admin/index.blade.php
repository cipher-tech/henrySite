@extends('layouts.adminLayout')

<!-- Main Content Layout -->
<!-- Welcome Area -->
@section('content')

    <div class="welcome-area">
        <div class="row m-0 align-items-center">
            <div class="col-lg-5 col-md-12 p-0">
                <div class="welcome-content">
                    <h1 class="mb-2">Hi, Welcome back {{$user->full_name}}!</h1>
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
                        <span class="col-8"> ${{ $user->wallet_balance }}</span>
                        <small class="col-4 text-small" 
                        style="font-size: xx-small;">
                        <?=str_replace('|', '<br /> ', $user->stock_starts)?>
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
                    <h3>${{ $user->invested }}</h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-purchase-tag'></i>
                    </div>
                    <span class="sub-title">Country</span>
                    <h3>${{ $user->country }}</h3>
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

    <h1>All Users</h1>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">full_name</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">phone_no</th>
                <th scope="col">invested</th>
                <th scope="col">wallet_balance</th>
                <th scope="col">country</th>
                {{-- <th scope="col" style="text-align: center" colspan="2">Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user["id"]}}</th>
                <td>{{$user["full_name"]}}</td>
                <td>{{$user["username"]}}</td>
                <td>{{$user["email"]}}</td> 
                <td>{{$user["phone_no"]}}</td> 
                <td>{{$user["invested"]}}</td> 
                <td>{{$user["wallet_balance"]}}</td> 
                <td>{{$user["country"]}}</td>  
                <th><a href="{{ route('viewUser', ['id' => $user['id']]) }}" class="btn btn-primary">More</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

<!-- Footer -->
<div class="flex-grow-1"></div>
<!-- End Footer -->

<!-- End Main Content Wrapper -->
