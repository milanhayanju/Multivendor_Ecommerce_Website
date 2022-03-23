@extends('backend.layouts.authentication')
@section('title', 'Login')


@section('content')

<div class="vertical-align-wrap">
	<div class="vertical-align-middle auth-main">
		<div class="auth-box">
            <div class="top">
                <img src="{{asset('backend/assets/img/logo-white.svg')}}" alt="Lucid">
            </div>
			<div class="card">
                <div class="header">
                    <p class="lead">Login to your account</p>
                </div>
                <div class="body">
                    <form class="form-auth-small" method="POST" action="{{ route('login') }}"">
                        @csrf
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="signin-email"  placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="signin-password" placeholder="Password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span>Remember me</span>
                            </label>								
                        </div> --}}
                        <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                        <div class="bottom">
                            {{-- <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{route('password.request')}}">Forgot password?</a></span> --}}
                            {{-- <span>Don't have an account? <a href="{{route('authentication.register')}}">Register</a></span> --}}
                        </div>
                    </form>
                </div>
            </div>
		</div>
	</div>
</div>

@stop