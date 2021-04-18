@extends('master')
    @section('css')

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
    @endsection('css')

    @section('content')


    <!--*******************
        Preloader end
    ********************-->

    
<br>
<br>
<br>
<br>
<br>
<br>


    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.html"> <h4>Login</h4></a>
        
                             
                                        <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('login') }}">
                                         @csrf
                                   

                                    <div class="form-group">
                                          <label for="email" >{{ __('E-Mail Address') }}</label>

                                        <input type="email" placeholder="Enter Email " class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                       @error('email')
                                         <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                         </span>
                                       @enderror   
                                    </div>

                                    <div class="form-group">
                                         <label for="email" >{{ __('Password') }}</label>
                                        <input type="password"  placeholder="Enter Password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                         @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                    </div>
 <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                                    
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </form>
                                    <p class="mt-5 login-form__footer">Not Having account <a href="/register" class="text-primary">Create New </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

      @endsection('content')
  <br>
<br>


    <!--**********************************
        Scripts
    ***********************************-->
        @section('script')

    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    @endsection('script')








