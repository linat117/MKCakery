@extends('layouts.app')
 
@section('content')

@extends('layouts.loginup')
<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                  
<div class="main">
<div class="signup">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <label for="chk" aria-hidden="true" class="signup">Sign up</label>
					
                            <div >

                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
 
                            <div >
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
 
                            <div>
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
 
                            <button type="submit">Sign up</button>
                            <p class="notreg">Already have an account?<a href="/login" class="notreg">Login here</a></p>
 
                            
                        </form>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection