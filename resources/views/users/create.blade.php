<?php

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h4>Add Users</h4>
                            <a href="{{ url('user') }}" class="btn btn-danger float-end">Back</a>

                            
                        </div>
                        <div class="card-body">
                            <form action="{{url('user')}}" method="POST">
                                @csrf
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control"/>
                                <label for="">Email</label>
                                <input type="emal" name="email" class="form-control"/>
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control"/>
                                <label for="">Roles</label>
                                <select class="form-control" name="role[]" id="" multiple >
                                    @foreach ($roles as $role )
                                    <option value="{{$role}}">{{$role}}</option>
                                        
                                    @endforeach
                                </select>
                                <button type="submit" class=" btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
