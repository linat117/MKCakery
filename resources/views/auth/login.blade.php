

@extends('layouts.app')
 
@section('content')
@extends('layouts.loginup')
<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                  
<div class="main">  	
        <div class="login">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf

                            <label for="chk" aria-hidden="true">Login</label>
                            <div>
					<input type="email" name="email" id="email"  class="form-control" placeholder="Email" required="" autofocus>
                    @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                </div>
                                <div>
					<input type="password"   id="password" class="form-control" name="password" placeholder="Password" required="">
                    @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
					<button class="loginButton">Login</button>
                    <p class="notreg">Don't have an account?<a href="/registration" class="notreg">Register here</a></p>

                </div>
            </div>
            </div>
                </div>
       
   
</main>
@endsection