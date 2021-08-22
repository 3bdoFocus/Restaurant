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
        @include('admin.content')
    </div>
    @include('admin.adminjs')
</body>

</html>
