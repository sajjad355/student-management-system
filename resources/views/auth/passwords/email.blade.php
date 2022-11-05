<style>
p {
  position: absolute;
  left: 70px;

}
</style>

@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:rgb(0, 153, 153)"><span style="color:white;font-size:20px; font-family:Script MT Bold">{{ __('Reset Password') }}</span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
<br>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><span style="font-size:21px; font-family:Monotype Corsiva">{{ __('E-Mail Address') }}</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <p>
                            
                                <button type="submit" class="btn btn-primary">
                                <span style="font-size:21px; font-family:Monotype Corsiva"> {{ __('Send Password Reset Link') }} </span>
                                </button>
                                </p>
                            </div>
                            
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
