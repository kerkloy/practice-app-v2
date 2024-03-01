<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <!--Fonts-->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css"></head>
<body>
    <div class="header text-center fw-bold"> 
        <br>
        <h3>EMPLOYEE LISTS</h3> 
        <div>
        <a href="{{route('employee.create')}}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Add New Employee</a>
        </div>
    </div>
    <div>
        @if(session('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

    </div>

    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8">
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Position</th>
                    <th>Birthdate</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Employees as $Employee)
                <tr>
                    <td>{{$Employee->id}}</td>
                    <td>{{$Employee->fullname}}</td>
                    <td>{{$Employee->username}}</td>
                    <td>{{$Employee->position}}</td>
                    <td>{{$Employee->birthdate}}</td>
                    <td>{{$Employee->salary}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{route('employee.edit',['Employee' => $Employee])}}" method="post" type="button" class="btn btn-success p-0">
                                @csrf
                                
                                <button class="btn btn-success m-0">Edit</button>
                            </form>
                            <form action="{{route('employee.delete',['Employee' => $Employee])}}" method="post" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        </div>
        <div class="col-2">

        </div>
    </div>

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
</body>
</html>