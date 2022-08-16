<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br />
    <div>
    <h3> Simple Login System in Laravel </h3>

    @if(isset(Auth::user()->email))

    <div>
        <strong> Welcome {{Auth::user()->email }} </strong>
        <a href="{{ url('/login/logout') }}"> Logout </a>
    </div>

    else
        <script> window.location="/login"; </script>
    @endif


    </div>
    
</body>
</html>