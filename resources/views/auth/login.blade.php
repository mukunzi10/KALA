<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>KIVU LITERACY LEGAL ADVOCACY</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/icon.png" '>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg">

            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body">

                                        <h1 class="text-center mt-0 m-b-15">
                                            <a href="index.html" class="logo logo-admin"><img src="assets/images/log2.png" height="110" alt="logo"></a>
                                        </h1>

                                        <div class="p-2">


                <form action="{{'autha'}}" method="POST">
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{
                           Session()::get('success', 'default');
                        }}
                    </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class='alert alert-danger'>
                        {{Session::get('fail')}}
                    </div>


                    @endif
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" pleaceholder="Enter Email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}}
                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" value="{{old('password')}}">

                            <span class="text-danger">@error('password'){{$message}}

                            @enderror</span>

                    </div>
                    <button class="btn btn-block btn-primary">Sign In</button>
                    <br>
                    <a href="{{'reg'}}">Create Account!</a>

                </form>
                             </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- jQuery  -->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/bootstrap.bundle.min.js"></script>
          <script src="assets/js/modernizr.min.js"></script>
          <script src="assets/js/detect.js"></script>
          <script src="assets/js/fastclick.js"></script>
          <script src="assets/js/jquery.slimscroll.js"></script>
          <script src="assets/js/jquery.blockUI.js"></script>
          <script src="assets/js/waves.js"></script>
          <script src="assets/js/jquery.nicescroll.js"></script>
          <script src="assets/js/jquery.scrollTo.min.js"></script>

          <!-- App js -->
          <script src="assets/js/app.js"></script>
    </body>
</html>



