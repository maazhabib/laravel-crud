<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1>ALL USER DATA</h1>
        <table class="table table-dark table-hover my-3">
            <thead>
                <a href="/newuser" class="btn btn-success btn-sm">ADD NEW</a>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">VIEW</th>
                    <th scope="col">UPDATE</th>
                    <th scope="col">DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $id => $user)
                    <tr>
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td><a href="{{ route('view.page' , $user->id) }}" class="btn btn-success btn-sm">VIEW</a></td>
                        <td><a href="{{ route('update.page' , $user->id) }}" class="btn btn-warning btn-sm">UPDATE</a></td>
                        <td><a href="{{ route('delete.user' , $user->id) }}" class="btn btn-danger btn-sm">DELETE</a></td>
                    </tr>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
