<!-- End Top Navbar Area -->
@extends('layouts.dashboardLayout')

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
        <h3>Fund account
            <pre>via Bitcoin</pre>
        </h3>

    </div>

    <div class="card-body">

        <div class="alert alert-dark rounded-pill" role="alert">
            Contact payments@mutualstockinvest.com for other payment methods
        </div>
        <p>Please Note that Minimum Fund Amount is $500. Contact payments@mutualstockinvest.com for a more detailed
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
            If you encounter any issue while funding your account, please contact payments@mutualstockinvest.com for
            assistance.
        </p>
        <form action="" method="POST">
            <div class="form-group">
                <label>Fund Amount ( USD )</label>
                <input type="number" class="form-control" name="btc_fund">
                <small class="form-text text-muted">Minimum deposit amount is $500</small>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" value="cipher" name="username" readonly>
            </div>
            <div class="form-group">
                <label>Send Payment To: </label>
                <input type="text" class="form-control" value="39oD1X89ur4Ym5W8gsWUqzoaJPJyKHLv7c" readonly>
                <small class="form-text text-muted">Copy address</small>
            </div>
            <div class="form-group">
                <label>Fund Code</label>
                <input type="text" class="form-control" name="fund_code" value="4603" readonly>
            </div>
            <div class="form-group">
                <label>Transaction Hash ID</label>
                <input class="form-control" placeholder="Provide your Transaction Hash ID" type="text" name="trx_hash">
            </div>
            <button type="submit" name="btc_submit" class="btn btn-primary">Complete transaction</button>
        </form>

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
