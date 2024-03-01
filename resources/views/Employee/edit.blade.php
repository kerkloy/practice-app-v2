<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>

    <!--Fonts-->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Styles-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="class text-center">
        <h3> Edit Employee </h3>
    </div>

    <form method="post" action="{{route('employee.update', ['Employee' => $Employee])}}">
    <div class="container">
        <div class="row">
            <div class="class col-4">
            @csrf
            @method('put')

            </div>
            <div class="class col-6">
                <div class="mb-3">
                <label for="fullname" class="form-label"> Fullname: </label>
                <input type="text" class="form-label" name="fullname" placeholder="Fullname" value="{{$Employee->fullname}}"></input>
                </div>
                <div class="mb-3">
                <label for="username" class="form-label"> Username: </label>
                <input type="text" class="form-label" name="username" placeholder="Username" value="{{$Employee->username}}"></input>
                </div>
                <div class="mb-3">
                <label for="position" class="form-label"> Position: </label>
                <input type="text" class="form-label" name="position" placeholder="Position" value="{{$Employee->position}}"></input>
                </div>
                <div class="mb-3">
                <label for="birthdate" class="form-label"> Birthdate: </label>
                <input type="date" class="form-label" name="birthdate" placeholder="Birthdate" value="{{$Employee->birthdate}}"></input>
                </div>
                <div class="mb-3">
                <label for="salary" class="form-label"> Salary: </label>
                <input type="text" class="form-label" name="salary" placeholder="Salary" value="{{$Employee->salary}}"></input>
                </div>
                <div class="mb-3">
                <button type="submit" class="btn btn-primary"> Edit Employee </button>
                </div>
            </div>
            <div class="class col-2">

            </div>
        </div>
    </div>
    </form>

    <!--Scripts-->
    <script src="{{ asset('assets/js/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/bootstrap.bundle.min.js') }}"></script>
</body>
</html>