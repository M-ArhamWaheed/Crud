

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Update</h4>
                        <form action=" {{ route('updateData', $user->id)}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" name="fname" id="firstName"
                                    placeholder="Enter First Name" value="{{ $user->fname }}">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lastName"
                                    placeholder="Enter Last Name" value="{{ $user->lname }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter Email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" id="phoneNumber"
                                    placeholder="Enter Phone Number" value="{{ $user->phone_no }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Enter Password" value="{{ $user->password }}">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" id="confirmPassword"
                                    placeholder="Confirm Password" value="{{ $user->cpassword }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
