@extends('layouts.app')

@section('content')
<div class="top-content">            
<div class="inner-bg">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 form-box">
            
                
                <div class="form-bottom">
                    <form class="form-horizontal login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}<br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-username form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-password form-control" name="password" required placeholder="Contraseña">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--<div class="form-group">
                            <div class="col-md-4 col-md-offset-1">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }}> <span style="background-color: #f4f6f7">Recordarme</span>
                                    </label>
                                </div>
                            </div>
                        </div>!-->
<br >
                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    Igresar
                                </button>
                            </div>
                            <div class="col-md-4 col-md-offset-1">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                   <br> <span style="background-color: #f4f6f7">Olvidaste la contraseña</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            
            
        
    </div>
</div>
    
</div>
</div>
@endsection
