<!DOCTYPE html>
<html lang="en">
<head>
    <title> Simple Login System in Laravel </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3> Simple Login System in Laravel </h3>

    @if(isset(Auth::user()->email))

        <script> window.location="/login/successlogin"; </script>

    @endif

    @if ($message = Session::get('error'))

    <div>
        <!-- <button type="button" data-dismiss="alert"> </button> -->
        <strong> {{$message}} </strong>
    </div>

    @endif

    @if(count($errors) > 0)
    <div class="login-issue">
        <ul>
        @foreach(errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
        </ul>
    </div>
    @endif

    <form method='post' action="{{route('checklogin')}}">
        @csrf
    <div>
        <label> Enter Email </label>
        <input type="email" name="email" class="form-control" /> 
    </div>
    <div>
        <label> Enter Password </label>
        <input type="password" name="password" class="form-control"> 
    </div>
    <input type="submit" name="login" class="submit" value="Login" />
    </form>
</body>
</html>