<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Admin</title>
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

        <form action="{{ url('/update/' . $data->id) }}" method="POST">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $data->title }}" required>
            <label for="price">Price</label>
            <input type="number" name="price" value="{{ $data->price }}" required>
            <label for="image">Images</label>
            <input type="file" name="image" value="{{ $data->image }}" required>
            <label for="description">Description</label><br>
            <textarea name="description" value="{{ $data->description }}"></textarea>
            <input class="bttn" type="submit" value="Update">
        </form>

    </div>
    @include('admin.adminjs')
</body>

</html>
