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
            <li class="item">Withdraw</li>
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

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Withdraw Funds</h3>

        </div>

        <div class="card-body">
            @if ($message)
                <p>{{ $message }}</p>
            @endif

            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ __($error) }}</p>
            @endforeach
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label>Withdrawal Amount ( USD )</label>
                    <input required placeholder="Enter deposit amount" name="amount" type="number" class="form-control"
                        name="btc_fund">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" value="{{_($user->username)}}" name="username" readonly>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="{{_($user->email)}}" name="email" readonly>
                </div>
                <div class="form-group">
                    <label>Withdrawal Type</label>

                    <select required class="form-control" name="type">
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option selected value="bitcoin">Bitcoin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea required name="coin_address" class="form-control"
                        placeholder="Please provide your bitcoin address here if you want to receive payment through bitcoin"
                        rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"> Withdraw Funds</button>
            </form>

        </div>
        <br><br>
        <blockquote class="blockquote bd-l bd-5 pd-l-20">
            <p class="mg-b-5 tx-inverse">Read Me Carefully</p>
            <footer class="blockquote-footer tx-14">Please note that depending on your location (Country), withdrawal can
                take up to five (5) working days to process. Bitcoin Payment though is made instantly to the Address
                provided.</footer>
        </blockquote>
    </div>

    <div class="card mb-30">
        {{-- <div class="alert alert-info" role="alert">
            <p>No Data Available Yet!.</p>
        </div> --}}
        <div class="card-body">
            <h1>Withdrawals</h1>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        {{-- <th scope="col">#id</th> --}}
                        <th scope="col">Transaction_id</th>
                        {{-- <th scope="col">username</th> --}}
                        <th scope="col">Email</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Coin Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        {{-- <th scope="col" style="text-align: center" colspan="2">Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($withdrawals as $withdrawal)
                    <tr>
                        {{-- <th scope="row">{{$withdrawal["id"]}}</th> --}}
                        <td>{{$withdrawal["transaction_id"]}}</td>
                        {{-- <td>{{$withdrawal["username"]}}</td> --}}
                        <td>{{$withdrawal["email"]}}</td> 
                        <td>{{$withdrawal["amount"]}}</td>  
                        <td>{{$withdrawal["coin_address"]}}</td> 
                        <td>{{$withdrawal["status"]}}</td> 
                        <td>{{$withdrawal["created_at"]}}</td> 
                        {{-- <th><a href="{{ route('viewUser', ['id' => $withdrawal['id']]) }}" class="btn btn-primary">Edit</a></th> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Footer -->
    <div class="flex-grow-1"></div>
@endsection
