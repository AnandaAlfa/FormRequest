<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <form class="form-horizontal text-center" action={{ route('submit') }} method="post">
        @csrf
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <h2 class="text-center">Login</h2>
            <p class="text-center">New or Change Request Form</p>
            <label class="control-label col-sm-2" for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
            <br>
            <br>
            <a href={{ route('signup') }} class="btn btn-primary">Sign Up</a>
        </div>
        <div class="col-md-4">
        </div>
    </form>
</body>

</html>
