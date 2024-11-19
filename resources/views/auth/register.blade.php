@extends('layouts.default')
@section('title', 'Register')
@section('content')

<main class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            <div class="card">
              <div class="card-header fs-2 fw-bold text-center">
                Registration
              </div>
              <div class="card-body">
                <form action="{{ route('register.post') }}" method="POST">
                  @csrf
                  <div class="form-group mb-3 mt-3">
                    <input type="text" name="fullname" id="name" class="form-control" placeholder="FullName" required autofocus>
                    @if ($errors->has('fullname'))
                      <span class="text-danger">{{ $errors->first('fullname') }}</span>
                    @endif
                  </div>
                  <div class="form-group mb-3 mt-3">
                    <input type="text" name="email" id="email" class="form-control" placeholder="email" required autofocus>
                    @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-group mb-3 mt-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="password" required autofocus>
                    @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="d-grid mx-auto">
                      <button type="submit" class="btn btn-primary mb-4">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</main>

@endsection