<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- <script type="text/javascript" src="{{ URL::asset('js/jquery-3.6.0.min.min.js') }}"></script>-->
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <style>
        .div-1 {
            background-color: #76D7C4;
        }

        .div-2 {
            background-color: #ABBAEA;
        }

    </style>
    <div class="jumbotron text-center" style=background-color: #76D7C4>
        <br>
        <br>
        <h1>Ingrese sus datos</h1>
        <p>Diagnostico</p>
    </div>
    <br>
    <br>
    <form action="{{ url('/login') }}" method="post" class="form-horizontal" style="margin: auto; width: 80%;">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese email">
            </div>
            <br>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Ingrese password">
            </div>
            <br>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Recuérdame</label>
                </div>
                <br>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

</body>

</html>
