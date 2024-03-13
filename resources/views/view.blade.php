<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">View</h2>
                        <hr>
                        @foreach ($del as $del)
                            <h4 class="text-center">Id:</h4>
                            <p class="text-center">{{ $del->id }}</p>
                            <h4 class="text-center">First Name:</h4>
                            <p class="text-center">{{ $del->fname }}</p>

                            <h4 class="text-center">Last Name:</h4>
                            <p class="text-center">{{ $del->lname }}</p>
                            <h4 class="text-center">Email Address:</h4>
                            <p class="text-center">{{ $del->email }}</p>
                            <h4 class="text-center">Mobile No:</h4>
                            <p class="text-center">{{ $del->phone_no }}</p>
                            <h4 class="text-center">Password:</h4>
                            <p class="text-center">{{ $del->password }}</p>
                            <h4 class="text-center">Confirm Password:</h4>
                            <p class="text-center">{{ $del->cpassword }}</p>
                            <h4 class="text-center">Joined:</h4>
                            <p class="text-center">{{ $del->date_time }}</p>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
