@extends('master')


@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="register" method="POST">

              @csrf

                <div class="mb-3">
                    <label for="username" class="form-label">Username *</label>
                    <p>Minimum 6 characters</p>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password *</label>
                  <p>Minimum 6 characters</p>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name *</label>
                    <p>Minimum 3 characters</p>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>

            </form>
        </div>
    </div>
</div>


@endsection