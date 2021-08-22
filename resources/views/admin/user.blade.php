<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Restaurant Admin</title>
        @include('admin.admincss')
    </head>

    <body>

        @include('admin.content')

        <div class="container-fluid page-body-wrapper">

            @include('admin.navbar')
            <h1 style="text-align: center; color: #555; margin-bottom: 20px;">USERS INFORMATIONS</h1>

            {{-- Table --}}

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                @if($data->usertype == '0')
                                    <a class="btn btn-danger" href="{{ url('/delete',$data->id) }}">Delete</a>
                                    @else
                                    <h4 style="color: #F00;">Not Allowed</h4>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- End Table --}}

        </div>

        @include('admin.adminjs')
    </body>

    </html>







</body>

</html>
