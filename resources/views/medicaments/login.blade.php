<html>

<head>
    <title>GSB intranet - Connection</title>
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/client.css') }}">

    <style>

    </style>

</head>

<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-light menuBack menuShadow">
        <a class="navbar-brand"><img src="{{ url('images/logo.png') }}" style="height:70px;"/></a>
        <h2>GSB INTRANET</h2>
        <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
            <ul class="navbar-nav">

            </ul>
        </div>
    </nav>
</div>
    <div class="container" style="margin:10%;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p class="text-left"><em>login</em></p>
            <div class="row test">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" >
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="password" name="password" placeholder="Mot de passe" type="password" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn send" style="background: #00AA66; color: white" type="submit"><strong>Se connecter</strong></button>
                        </div>
                    </div>
                    <div class="row">
                        @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        @error('password') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('partials.footer')
</body>

