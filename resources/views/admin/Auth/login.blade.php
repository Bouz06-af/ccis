<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">	
	<title>Bibliothèque</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/styles2.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="container">
		<div class="img">
			<img src="images/undraw_book_lover_mkck.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('admin.login') }}" >
				@csrf
				<img src="images/undraw_profile_pic_ic5t.svg">
				<h2 class="title">Bienvenue Admin</h2>
           		<div class="input-div one">
           		   <div class="i">
					<i class="fas fa-envelope-square"></i>
           		   </div>
           		   <div class="div">
    
           		   		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
  
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
           		    	
						   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">
  
						   @error('password')
							   <span class="invalid-feedback" role="alert">
								   <strong>{{ $message }}</strong>
							   </span>
						   @enderror
            	   </div>
            	</div>
<br>
				<div class="input">
					<div class="col">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

							<label class="form-check-label" for="remember">
								{{ __('mémoriser mon compte ') }}
							</label>
						</div>
					</div>
				</div>
				<br>
            	<a href="{{ route ('password.request')}}">Mot de passe oublié ?</a>

            	<input type="submit" class="btn" value="Se connecter">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
</body>
</html>
