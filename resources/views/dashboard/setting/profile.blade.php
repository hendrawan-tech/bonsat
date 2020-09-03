@extends('dashboard.templates.master')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Your Profile</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/settings/profile/{{Auth::user()->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="email" value="{{$user->email}}" disabled class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 d-flex text-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection