<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/styles2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="container">
		<div class="img">
			<img src="images/undraw_book_reading.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('register') }}">
                @csrf
				<img src="images/undraw_profile_pic_ic5t.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
           		   </div>
           		</div>
                   <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope-square"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                 </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            	   </div>
            	</div>
                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <h5>Confirm Password</h5>
                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                 </div>
              </div>
              <br>
            	<a href="{{ route ('password.request')}} ">Forgot Password?</a>
                <a href="{{ route ('login')}} ">Already have an account ?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
