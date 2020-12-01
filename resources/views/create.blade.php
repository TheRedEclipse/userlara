@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">


                        <form action="{!! route('create') !!}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" required="required" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                <small id="emailHelp" class="form-text text-muted">Your email</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="name" class="form-control" id="exampleInputUsername" required="required" aria-describedby="emailHelp" placeholder="Enter username" name="name">
                                <small id="emailHelp" class="form-text text-muted">Your username?</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" required="required" placeholder="Password" name="password">
                            </div>
                            <input type="submit" value="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
