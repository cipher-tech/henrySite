<!-- End Top Navbar Area -->
@extends('layouts.dashboardLayout')

@section('content')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item">
                <a href="{{ route('dashboard') }}"><i class='bx bx-home-alt'></i></a>
            </li>
            <li class="item">Dashboard</li>
            <li class="item">Deposits</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->



    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Fund account
                <pre>via Bitcoin</pre>
            </h3>

        </div>

        <div class="card-body">
            @if ($message)
                <p>{{ $message }}</p>
            @endif

            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ __($error) }}</p>
            @endforeach

            <div class="alert alert-dark rounded-pill" role="alert">
                Contact support@stockmutualinvest.com for other payment methods
            </div>
            <p>Please Note that Minimum Fund Amount is $500. Contact support@stockmutualinvest.com for a more detailed
                description.<br>
            </p>
            <ul>
                <li>Copy the wallet address provided below.</li>
                <li>Make payment from your Bitcoin wallet. (Send the equivalent bitcoin amount of the amount you wish to
                    invest).</li>
                <li>Provide your transaction hash ID. This can be gotten from your wallet after payment.</li>
                <li>Click on Submit.</li>
            </ul>
            <p> Your account will be credited once your payment is confirmed.
                NOTE: If you have problems finding your Transaction Hash ID, Use the last 10 digits of your wallet address
                as the Transaction Hash ID.
                If you encounter any issue while funding your account, please contact support@stockmutualinvest.com for
                assistance.
            </p>
            <form method="POST">
                @csrf

                <div class="form-group">
                    <label>Fund Amount ( USD )</label>
                    <input type="number" min="500" class="form-control" name="amount">
                    <small class="form-text text-muted">Minimum deposit amount is $500</small>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" value="{{ __($user['username']) }}" name="username" readonly>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{ __($user['email']) }}" name="email" readonly>
                </div>
                <div class="form-group">
                    <label>Send Payment To: </label>
                    <input type="text" class="form-control" value="1Kj3E61UHJSqa2RjyVzNCTvC7aoy7fxXAi" readonly>
                    <small class="form-text text-muted">Copy address</small>
                </div>
                <div class="form-group">
                    <label>Wallet Address</label>
                    <input type="text" class="form-control" name="coin_address" value="">
                </div>
                <div class="form-group">
                    <label>Transaction Hash ID</label>
                    <input class="form-control" placeholder="Provide your Transaction Hash ID" type="text"
                        name="transaction_id">
                </div>
                <button type="submit" name="btc_submit" class="btn btn-primary">Complete transaction</button>
            </form>

        </div>

        <div class="card-body">
            <h1>Deposits</h1>
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
                    @foreach ($deposits as $deposit)
                    <tr>
                        {{-- <th scope="row">{{$deposit["id"]}}</th> --}}
                        <td>{{$deposit["transaction_id"]}}</td>
                        {{-- <td>{{$deposit["username"]}}</td> --}}
                        <td>{{$deposit["email"]}}</td> 
                        <td>{{$deposit["amount"]}}</td>  
                        <td>{{$deposit["coin_address"]}}</td> 
                        <td>{{$deposit["status"]}}</td> 
                        <td>{{$deposit["created_at"]}}</td> 
                        {{-- <th><a href="{{ route('viewUser', ['id' => $deposit['id']]) }}" class="btn btn-primary">Edit</a></th> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


<script>
    function ClipBoard() {
        p1.innerText = copytext.innerText;
        Copied = p1.createTextRange();
        Copied.execCommand("Copy");
    }

    function copyText() {
        /* Get the text field */
        var copyText = document.getElementById("p1");

        /* Select the text field */
        copyText.select();

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied Address: " + copyText.value);
    }

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/600c16c9c31c9117cb71adaa/1esnji151';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();

</script>
