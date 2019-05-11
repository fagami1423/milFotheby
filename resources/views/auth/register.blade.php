@extends('frontend.layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                        @include('messages')
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">title</label>

                            <div class="col-md-6">
                                <select id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                                <option value="Master">Master</option>
                                <option value="MR">MR</option>
                                <option value="MRs">Mrs</option>
                                </select>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="firstname" class="col-md-4 control-label">firstname</label>
    
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>
    
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                    <label for="surname" class="col-md-4 control-label">surname</label>
        
                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>
        
                                        @if ($errors->has('surname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                                        <label for="contact" class="col-md-4 control-label">contact</label>
            
                                        <div class="col-md-6">
                                            <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required autofocus>
            
                                            @if ($errors->has('contact'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('contact') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('client_status') ? ' has-error' : '' }}">
                                            <label for="client_status" class="col-md-4 control-label">Client Status</label>
                
                                            <div class="col-md-6">
                                                <select id="client_status" type="text" class="form-control" name="client_status" value="{{ old('client_status') }}" required autofocus>
                                                    <option value="buyer">Buyer</option>
                                                    <option value="seller">Seller</option>
                                                    <option value="joint">joint</option>
                                                </select>
                
                                                @if ($errors->has('client_status'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('client_status') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                    </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bank_acc_no') ? ' has-error' : '' }}">
                                <label for="bank_acc_no" class="col-md-4 control-label">Bank Account code</label>
    
                                <div class="col-md-6">
                                    <input id="bank_acc_no" type="text" class="form-control" name="bank_acc_no" value="{{ old('bank_acc_no') }}" required autofocus>
    
                                    @if ($errors->has('bank_acc_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bank_acc_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group{{ $errors->has('bank_sort_code') ? ' has-error' : '' }}">
                                <label for="bank_sort_code" class="col-md-4 control-label">Bank Sort no</label>
    
                                <div class="col-md-6">
                                    <input id="bank_sort_code" type="text" class="form-control" name="bank_sort_code" value="{{ old('bank_sort_code') }}" required autofocus>
    
                                    @if ($errors->has('bank_sort_code'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bank_sort_code') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
