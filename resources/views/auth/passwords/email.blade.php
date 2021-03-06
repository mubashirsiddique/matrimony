@extends('layouts.master')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Reset Password</h3></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         
                            <div class="col m6 s12 input-field">
                                <input id ="email" type="email" class="form-control validate" name="email" value="{{ old('email') }}">
				<label for="email"><i class="fa fa-btn fa-envelope"></i> E-Mail Address</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
