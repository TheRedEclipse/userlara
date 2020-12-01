@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">


                        <form action="{!! route('update', $user->id) !!}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ $user->email }}">
                                <small id="emailHelp" class="form-text text-muted">Change email</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="name" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter username" name="name"  value="{{ $user->name }}">
                                <small id="emailHelp" class="form-text text-muted">Perhaps a new username?</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" required="required" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                            <input type="submit" value="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
