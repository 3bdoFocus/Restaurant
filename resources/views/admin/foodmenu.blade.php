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

    @include('admin.content')

    <div class="container-fluid page-body-wrapper">

        @include('admin.navbar')
        @if(session('status'))
            <div class="alert alert-success" role="alert">

                {{ session('status') }}

            </div>
        @endif

        <h1 style="text-align: center; color: #555; margin-bottom: 20px;">Food Menu</h1>

        <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Enter your Title" required>
            <label for="price">Price</label>
            <input type="number" name="price" placeholder="Enter Price" required>
            <label for="image">Images</label>
            <input type="file" name="image" required>
            <label for="description">Description</label><br>
            <textarea name="description"></textarea>
            <input class="bttn" type="submit" value="Save">
        </form>

        <br>
        <hr>
        <br>

        {{-- Table --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">FoodName</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Images</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <th scope="row">{{ $data->title }}</th>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td>
                            <img src="/foodimage/{{ $data->image }}">
                        </td>
                        <td>
                            <a class="btn btn-danger"
                            href="{{ url('/deletemenu/' . $data->id) }}">Delete</a>

                            <a class="btn btn-dribbble"
                            href="{{ url('/edit/' . $data->id) }}">Edit</a>
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
