@extends('layouts.login-layout')

@section('title')
    Register 
@endsection
@section('content')
  
   <div class="signup-form">
   <form method="POST" action="{{ route('register') }}">
                        @csrf
        <div class="form-header">
            <h2>{{ __('Register') }}</h2>
            <p>Fill out this form to start your dashboard!</p>
        </div>
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
             <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus/>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
        </div>
        <div class="form-group">
             <label for="email">{{ __('E-Mail Address') }}</label>
             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
        </div>
        <div class="form-group">
            <label>{{ __('Password') }}</label>
           <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>
         
        <div class="form-group">
            <label>{{ __('Confirm Password') }}</label>
            
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
           
        </div>        
        
        <div class="form-group">
             <button type="submit" class="btn btn-primary btn-block btn-lg">
                                    {{ __('Register') }}
                                </button>
            
        </div>  
    </form>
    <div class="text-center small">Already have an account? <a href="login">Login here</a></div>


@endsection

