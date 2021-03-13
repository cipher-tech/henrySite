<!-- End Top Navbar Area -->
@extends('layouts.adminLayout')

@section('content')

    <!-- Main Content Wrapper -->
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item">
                <a href="/dashboard"><i class='bx bx-home-alt'></i></a>
            </li>
            <li class="item">Dashboard</li>
            <li class="item">My Profile</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-profile-page">

        <div class="card shadow-base bd-0 rounded-0 widget-4">
            <div class="card-body">
                <h4 class="tx-normal tx-roboto tx-white">chu</h4>

            </div><!-- card-body -->
        </div><!-- card -->

        <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
            <ul class="nav nav-pills nav-fill" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Profile</a>
                </li>
                <li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Edit</a>
                </li>
            </ul>
        </div>

        <div class="tab-content br-profile-body">
            <div class="tab-pane fade active show" id="posts">
                <div class="row">

                    <div class="col-lg-12 mg-t-30 mg-lg-t-0">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                            <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Contact Information</h6>
                            @csrf
                            @if ($message)
                                <p class="text-success">{{ $message }}</p>
                            @endif

                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ __($error) }}</p>
                            @endforeach
                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Full Name</label>
                            <p class="tx-info mg-b-25"> {{ $user->full_name }} </p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Wallet Balance</label>
                            <p class="tx-info mg-b-25"> {{ $user->wallet_balance }}</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Phone Number</label>
                            <p class="tx-info mg-b-25">{{ $user->phone_no }}</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Email
                                Address</label>
                            <p class="tx-inverse mg-b-25">{{ $user->email }}</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Country</label>
                            <p class="tx-inverse mg-b-25">{{ $user->country }}</p>

                            <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Other Information</h6>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Amount Invested</label>
                            <p class="tx-inverse mg-b-25">{{ $user->invested }}</p>

                        </div><!-- card -->

                    </div><!-- col-lg-4 -->
                </div><!-- row -->
            </div><!-- tab-pane -->
            <div class="tab-pane fade" id="photos">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">
                            <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-14 mg-b-30">Edit Profile</h6>

                            <form method="POST" id="pchange">
                                @csrf
                                @if ($message)
                                    <p>{{ $message }}</p>
                                @endif

                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ __($error) }}</p>
                                @endforeach
                                <input hidden class="form-control" name="id" type="text" value="{{ $user['id'] }}">

                                <div class="col-lg">
                                    <label>Username</label>
                                    <input class="form-control" name="username" type="text"
                                        value="{{ $user['username'] }}">
                                </div><!-- col -->

                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="email" value="{{ $user['email'] }}">
                                </div><!-- col -->

                                <div class="col-lg">
                                    <label>Full Name</label>
                                    <input class="form-control" name="full_name" type="text"
                                        value="{{ $user['full_name'] }}">
                                </div><!-- col -->

                                <div class="col-lg">
                                    <label>Phone Number</label>
                                    <input class="form-control" name="phone_no" type="text"
                                        value="{{ $user['phone_no'] }}">
                                </div><!-- col -->

                                <div class="col-lg">
                                    <label>Wallet Balance</label>
                                    <input class="form-control" name="wallet_balance" type="text"
                                        value="{{ $user['wallet_balance'] }}">
                                </div><!-- col -->

                                <div class="col-lg">
                                    <label>Invested</label>
                                    <input class="form-control" name="invested" type="text"
                                        value="{{ $user['invested'] }}">
                                </div><!-- col -->

                                <div class="col-lg">
                                    <label>Stats</label>
                                    <input class="form-control" name="stock_starts" type="text"
                                        value="{{ $user['stock_starts'] }}">
                                </div><!-- col -->

                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label>Country</label>
                                    <input class="form-control" name="country" type="text"
                                        value="{{ $user['country'] }}">
                                </div><!-- col -->

                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <div class="gaps-1x"></div><!-- 10px gap -->
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-send mg-r-10"></i>
                                        Submit</button>
                                    <div class="gaps-2x d-sm-none"></div>
                                    <span class="text-success"></span>
                                </div><!-- col -->
                            </form>


                        </div><!-- card -->
                    </div><!-- col-lg-8 -->
                </div><!-- row -->
            </div><!-- tab-pane -->
        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <!-- Footer -->
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
<!--End of Tawk.to Script-->

</html>
