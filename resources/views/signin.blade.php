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
                        <h4 class="card-title text-center">Sign In</h4>
                        <form action=" {{ route('login') }} " method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" required name="email" id="email"
                                    placeholder="Enter Email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" required name="password" id="password"
                                    placeholder="Enter Password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
