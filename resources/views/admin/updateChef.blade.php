<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>

    <base href="/public">
    @include('admin.admincss')
</head>

<body>


    <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')

        <h1 style="text-align: center; color: #555; margin-bottom: 20px;">Update Chefs</h1>

        <form action="{{ url('/upchef' , $data->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $data->name }}" required>

            <label for="speciality">Speciality</label>
            <input type="text" name="speciality" value="{{ $data->speciality }}" required>

            <label for="image">Old Image</label>
            <img src="/chefimages/{{ $data->image }}">
            <br><br>

            <label for="image">New Image</label>
            <input type="file" name="image">

            <input class="bttn" type="submit" value="Update Chef">
        </form>

    </div>
    @include('admin.adminjs')
</body>

</html>
