<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/materialize/css/materialize.min.css') }}"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <div class="container">
    <!-- Page Content goes here -->
    <div class="row">
      <div class="col s12 m6 push-m3 l4 push-l4 z-depth-3" style="margin:50px auto">
		    <ul id="tabs-swipe-demo" class="tabs ">
			    <li class="tab col s6"><a href="#register">Register</a></li>
			    <li class="tab col s5"><a class="active" href="#login">Login</a></li>
		    </ul>
		    
		    <div id="register" class="col s12">
		  
          <div class="row">
            <form class="col s12" role="form" method="POST" action="{{ route('register') }}">
              <div class="row">
                {{ csrf_field() }}
                <div class="input-field col s12">
                  <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
	                  <span class="help-block">
	                  <strong>{{ $errors->first('name') }}</strong>
	                  </span>
                  @endif
                  <label for="name">Full Name</label>
                </div>
                
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
	                  <span class="help-block">
	                  <strong>{{ $errors->first('email') }}</strong>
	                  </span>
                  @endif
                  <label for="email">Email</label>
                </div>
                
                <div class="row">
                  <div class="input-field col s12">
                    <div class="input-field col s12">
                      <label>Gender A</label>
                    <p></p>
                    </div>
                    <div class="input-field col s6">
                      <input name="gender" type="radio" id="gender1" />
                      <label for="gender1">Male</label>
                    </div>
                    <div class="input-field col s6">
                      <input name="gender" type="radio" id="gender2" />
                      <label for="gender2">Female</label>
                    </div>
                  </div>
                </div>                

                <div class="input-field col s12">
                  <input id="password" type="password" class="validate" name="password" required>

                  @if ($errors->has('password'))
	                  <span class="help-block">
	                  <strong>{{ $errors->first('password') }}</strong>
	                  </span>
                  @endif
                  <label for="password">Password</label>
                </div>
                
                <div class="input-field col s12">
                  <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                  <label for="password-confirm">Re-type Password</label>
                </div>
              
              
                <div class="input-field col s12">
                  <input id="date" type="date" class="datepicker">
                  <label for="date">Birth date</label>
                </div>
              
                
              </div>
              <div class="row">
                <button type="submit" class="waves-effect waves-light btn col s12">Register</a>
              </div>
              
            </form>
          </div>
        
		    </div>
		    <div id="login" class="col s12"> <!-- LOGIN -->
		    
          <div class="row">
            <form class="col s12" role="form" method="POST" action="{{ route('login') }}">
              <div class="row">
                {{ csrf_field() }}
                <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                  <label for="email">Email</label>
                </div>
                <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                  <input id="password" type="password" class="validate" name="password" required>
                  @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <button type="submit" class="waves-effect waves-light btn col s12">Login</button>
              </div>
            </form>
          </div>
		  
		  
		    </div>
      </div>
     </div>

    </div>
  
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/materialize/js/materialize.min.js') }}"></script>
    <script>
$('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 50, // Creates a dropdown of 15 years to control year
  // changeMonth: true,
  // changeYear: true,
  // yearRange: '1972:2011'
});
    </script>
  </body>
</html>
