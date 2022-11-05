<!DOCTYPE html>
<html>
<head>
<title> 
           LogIn
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href =  
"https://www.flaticon.com/svg/static/icons/svg/1870/1870051.svg" 
        type = "image/x-icon"> 
<style>
p {
  position: absolute;
  left: 113px;
  top:25px;

}
#GFG { 
            text-decoration: none; 

            box-shadow: none;
        } 

h6 {
  position: absolute;
  left: 130px;
  top:10px;
}
</style>
</head>
<body>
@extends('layouts.app')

@section('content')


<br>
<div class="container ">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:rgb(0, 153, 153)"><span style="color:white;font-size:20px; font-family:Script MT Bold">{{ __('Login') }}<span></div>

                <div class="card-body a">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
<br>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><span style="font-size:21px; font-family:Monotype Corsiva">{{ __('E-Mail Address') }}</span></label>

                            <div class="col-md-6">
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <p>
                                <button type="submit" style="width:150px;right: 170px;" class="btn btn-primary">
                                <span style="font-size:18px; font-family:Monotype Corsiva">  {{ __('Login') }}<span>
                                
                                </button>
                                
                                </p>

                                                
<br><br><br><br><br>

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
