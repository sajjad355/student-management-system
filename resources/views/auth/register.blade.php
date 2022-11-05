<!DOCTYPE html>
<html>
<head>
<title> 
           Registration
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href =  
"https://www.flaticon.com/svg/static/icons/svg/1870/1870051.svg" 
        type = "image/x-icon"> 
<style>
p {
  position: absolute;
  left: 110px;
  top:-40px;
  width:100px;


  .a{
 position: absolute;
  height: 500px;
}
}

</style>
</head>
<body>
@extends('layouts.app')

@section('content')
<br>
<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card a">
                <div class="card-header" style="background-color:rgb(0, 153, 153)"><span style="color:white;font-size:20px; font-family:Script MT Bold">{{ __('Registration') }}</span></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
<br>
                        <div class="form-group row a">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><span style="font-size:21px; font-family:Monotype Corsiva">{{ __('Name') }}</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><span style="font-size:21px; font-family:Monotype Corsiva">{{ __('E-Mail Address') }}</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email"> 

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><span style="font-size:21px; font-family:Monotype Corsiva">{{ __('Password') }}</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><span style="font-size:21px; font-family:Monotype Corsiva">{{ __('Confirm Password') }}</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter re-password">
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><span style="font-size:21px; font-family:Monotype Corsiva">{{ __('Status') }}</span></label>

                            <div class="col-md-6">
                             <input type="text" class="form-control" value="Student" readonly>
                            </div>
                        </div>
                        









                        <br><br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <p>
                                <button type="submit" class="btn btn-primary"  style="width:150px;">
                                
                                <span style="font-size:21px; font-family:Monotype Corsiva">{{ __('Register') }}</span>
                                    
                                </button>
                               </p>
                               <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
