
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>HTML BoilerPlate Login</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<meta name="author" content="Sreejith BS">

<!-- Style-CSS --> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset ('/css/login_register.css')}}" type="text/css" media="all" /> 

<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>    
</head>

<body>
<nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
   

  </div><!-- /.container-->
</nav> 

<div class="wrapper">
    <div class="register-background"> 
        <div class="filter-black"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                        <div class="register-card">
                            <h3 class="title">Login Page</h3>
                            <form action="{{ route('auth.check') }}" method="post">
                    @csrf
                    <div class="results">
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                </div>
                            @endif

                    </div>

                    <div class="form-group">
                            <label >username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter your username" value="{{ old('username') }}">
                            <span class="text-danger">@error('username') {{ $message }} @enderror</span>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">se connecter</button>
                        </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>     
      
    </div>
</div>      

</body>

<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

</html>

