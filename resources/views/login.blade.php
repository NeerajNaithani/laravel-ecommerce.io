@extends('master')
@section('content')

    <header>
        <!--Amazon Image Logo-->
        <div class="d-flex flex-row justify-content-center">
            <div class="row">
                <div class="col-md">
                    <img class="img_1" src="images/amazon-dark-logo-png-transparent.png" alt="Amazon Logo" />
                </div>
                <!--Col 1 End-->
            </div>
            <!--Row 1 End-->
        </div>
        <!--Container End-->
        <!--Amazon Image Logo-->
    </header>
    <!--Form-->
    <div class="d-flex flex-row justify-content-center">
        <div class="row">
            <div class="col-md">
                <div class="sign-in">Sign In</div>
                <form action="login" method="POST" target="_blank">
                    <div class="form-group">
                        @csrf
                        <label id="words_1" for="exampleInputEmail1">Email(phone for mobile accounts)</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label id="words_2" for="exampleInputPassword1">Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            &nbsp
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Forgot your password?
                        </label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning" id="sign-in">Log In</button>
                </form>
                <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                <p class="keep-sign-in">Keep me signed in. <a href="https://stupidlink.com">Details</a></p>
                <img id="amazon-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2221140/newtoamazon1.svg"
                    alt="Amazon Image">
            </div>
        </div>
        <div class="form-check">

        </div>
        <button type="button" class="btn btn-warning" id="grey-button">Create your Amazon account</button>

        </form>
    </div>
    <!--Col 1 End-->
    </div>
    <!--Row 1 End-->
    </div>
    <!--Container End-->
    <!--Form-->
    <div class="d-flex flex-row justify-content-center">
        <div class="row">
            <div class="col">
                <p class="conditions"><a>Conditions of Use &nbsp &nbsp &nbsp </a> <a>Privacy Notice&nbsp &nbsp &nbsp </a>
                    <a>Help&nbsp &nbsp &nbsp </a>
                </p>
            </div>
            <!--Footer Col 1 End-->
        </div>
        <!--Footer Row 1 End-->

    </div>
@endsection
