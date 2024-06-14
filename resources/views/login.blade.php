<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JagoKoding</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('theme/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('theme/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <br>
        <br>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style=" background: url('data:image/jpeg;base64,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');
"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password">
                                        </div>

                                        <div class="form text-center">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>


                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
