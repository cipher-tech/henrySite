<!-- End Top Navbar Area -->
@extends('layouts.adminLayout')

@section('content')
<!-- Breadcrumb Area -->
<div class="breadcrumb-area">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li class="item">
            <a href="https://mutualstockinvest.com//dashboard"><i class='bx bx-home-alt'></i></a>
        </li>
        <li class="item">Dashboard</li>
        <li class="item">Deposits</li>
    </ol>
</div>
<!-- End Breadcrumb Area -->



<!-- Start -->
<div class="card mb-30">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Withdrawals
            <pre>via Bitcoin</pre>
        </h3>

    </div>

    <div class="card-body">
        <h1> 
            All Withdrawals     
        </h1>
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
                @foreach ($Withdrawals as $withdrawal)
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
