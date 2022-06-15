<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ShareYourCar</title>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>
    
    <div class="forms">
        @if (Session::has('message-login'))
        <div class="alert alert-danger alert-dismissible " style="font-size:15px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{ Session::get('message-login') }}
        </div>
        @endif

        <!-- LOGIN -->
        <div class="tabs">
            <span class="register tab">Register</span>
            <span class="login tab">Login</span>
        </div>

        <div class="tab-login">
            <h2>Welcome back at ShareYourCar</h2>
            <p>Good to see you again!</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <label for="username">{{ __('Username') }}</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required />

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="field">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="********">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <input type="submit" value="Login" id="login" />

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif

                <div class="fb-google">
                    <div class="img-container"><img src="icons/google.png" /></div>
                    <div class="img-container"><img src="icons/facebook.png" /></div>
                </div>
            </form>
        </div>

        <!-- REGISTER -->
        <div class="tab-register">
            <h2>Register to ShareYourCar</h2>
            <p>
                Join to ShareYourCare you will get the best recommendation for rent
                car in near of you.
            </p>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="field">
                    <label for="register_username">{{ __('Username') }}</label>
                    <input id="register_username" type="text" class="form-control @error('register_username') is-invalid @enderror" name="register_username" value="{{ old('register_username') }}" required autocomplete="username" autofocus />

                    @error('register_username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="field">
                    <label for="register_email">{{ __('Email Address') }}</label>
                    <input id="register_email" type="email" class="form-control @error('register_email') is-invalid @enderror" name="register_email" value="{{ old('register_email') }}" required autocomplete="email">

                    @error('register_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="field">
                    <label for="register_password">{{ __('Password') }}</label>
                    <input id="register_password" type="password" class="form-control @error('register_password') is-invalid @enderror" name="register_password" required autocomplete="new-password" placeholder="********">

                    @error('register_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="field">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="register_password_confirmation" required autocomplete="new-password" placeholder="********">
                    </div>
                </div>
                <input type="submit" value="Register" id="register" />
                <div class="fb-google">
                    <div class="img-container"><img src="icons/google.png" /></div>
                    <div class="img-container"><img src="icons/facebook.png" /></div>
                </div>
            </form>
        </div>
    </div>

    <div class="cover-image">
        <img src="images/reg-img.jpg" />
    </div>
</body>

</html>