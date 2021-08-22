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
        {{-- @include('admin.content') --}}


        {{-- Table --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->time }}</td>
                        <td>{{ $data->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- End Table --}}
    </div>
    @include('admin.adminjs')
</body>

</html>
