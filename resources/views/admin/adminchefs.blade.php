<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    @include('admin.admincss')
</head>

<body>


    <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')


        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h1 style="text-align: center; color: #555; margin-bottom: 20px;">Chefs Information</h1>

        <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name Here" required>

            <label for="speciality">Speciality</label>
            <input type="text" name="speciality" placeholder="Enter Speciality" required>

            <input type="file" name="image" required>

            <input class="bttn" type="submit" value="Save">
        </form>

        <br><br><hr><br><br>


        {{-- Table --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Chef Name</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <th scope="row">{{ $data->name }}</th>
                        <td>{{ $data->speciality }}</td>
                        <td>
                            <img src="/chefimages/{{ $data->image }}">
                        </td>
                        <td>
                            <a class="btn btn-github"
                            href="{{ url('/updatechef' , $data->id) }}">Update</a>

                            <a class="btn btn-danger"
                            href="{{ url('/deletechef', $data->id) }}">Delete</a>
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
