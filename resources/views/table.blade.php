<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="border-1 border-white bg-danger fs-5 text-white text-center">#</th>
                <th class="border-1 border-white bg-danger fs-5 text-white text-center">First Name</th>
                <th class="border-1 border-white bg-danger fs-5 text-white text-center">Last Name</th>
                <th class="border-1 border-white bg-danger fs-5 text-white text-center">Email Address</th>
                <th class="border-1 border-white bg-danger fs-5 text-white text-center">Update</th>
                <th class="border-1 border-white bg-danger fs-5 text-white text-center">Delete</th>
                <th class="border-1 border-white bg-danger fs-5 text-white text-center">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readData as $data)
                <tr>
                    <td class="border-1 border-white fw-bold bg-danger text-white text-center">{{ $loop->iteration }}</td>
                    <td class="border-1 border-black text-center">{{ $data->fname }}</td>
                    <td class="border-1 border-black text-center">{{ $data->lname }}</td>
                    <td class="border-1 border-black text-center">{{ $data->email }}</td>
                    <td class="border-1 border-black text-center">
                        <a href="{{ route('updatePage' , $data->id) }}"><button class="btn btn-primary btn-sm">Update</button></a>
                    </td>
                    <td class="border-1 border-black text-white text-center">
                        <a href="{{ route('delete' , $data->id) }}"><button class="btn btn-danger btn-sm">Delete</button></a>
                    </td>
                    <td class="border-1 border-black text-white text-center">
                        <a href="{{ route('show' , $data->id) }}"><button class="btn btn-success btn-sm">View</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
