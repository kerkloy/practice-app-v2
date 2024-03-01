<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <!--Fonts-->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Styles-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    <div class="class text-center">
        <h3 class="text-bold">USER LOGIN</h3>
        <br>
        <hr>
    </div>
    
    <div class="container text-center">
        <div class="row">
            <div class="col-3">
                
            </div>
            <div class="col-6">
            <form>
                <div class="mb-3">
                    <label for="user-name" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="user-name">
                <div class="mb-3">
                    <label for="password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password1">
                </div>
                <button type="submit" class="btn btn-primary">Log-In</button>
            </form>
            </div>
            <div class="col-3">
                
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="{{ asset('assets/js/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/bootstrap.bundle.min.js') }}"></script>
</body>
</html>