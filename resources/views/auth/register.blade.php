<!-- resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('content')
 <div class="container-fluid">
    <section class="container">
        <div class="container-page">                
            <div class="col-md-6">
                <h3 class="dark-grey">Registration</h3>
             
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach

                       </ul>
                   </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="/auth/register">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation">
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
        
            <div class="col-md-6">
                <h3 class="dark-grey">Terms and Conditions</h3>
                <p>
                    By clicking on "Register" you agree to The Company's' Terms and Conditions
                </p>
                <p>
                    While rare, prices are subject to change based on exchange rate fluctuations - 
                    should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
                </p>
                <p>
                    Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
                </p>
                <p>
                    Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
                </p>
            </div>
        </div>
    </section>
</div> 

@endsection