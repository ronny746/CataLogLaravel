@extends('master')
@section('content')
<div class="container custom-login">
    <div class="Row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="POST">
                <div class="form-group ">
                    @csrf
                    <label for="exampleinputEmail3">Email Address</label>

                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">

                </div>
                <div class="form-group ">
                    <label for="exampleinputPassword3">Password</label>

                    <input type="password" name="password" class="form-control" id="inputPassword3"
                        placeholder="Password">

                </div>

                <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
    </form>
</div>
</div>
</div>
@endsection