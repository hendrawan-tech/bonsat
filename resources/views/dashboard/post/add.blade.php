@extends('dashboard.templates.master')

@section('content')

<form action="/dashboard/posts/post" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Post</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                            @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea id="mymce" name="description">{{old('description')}}</textarea>
                            @error('description')
                            <span class="text-danger mt-2">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Publish</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                    <option value="">Select Categories</option>
                                    @foreach ($categories as $m)
                                    <option value="{{$m->id}}" {{old('category_id') ? 'selected' : ''}}>{{$m->category}}</option>
                                    @endforeach
                                </select>
                                @error('url')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="">Select Status</option>
                                    <option value="public" {{old('status') ? 'selected' : ''}}>Public</option>
                                    <option value="pending" {{old('status') ? 'selected' : ''}}>Pending</option>
                                </select>
                                @error('url')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2  ">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                  <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                      <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Add Location (optional)
                                      </button>
                                    </h2>
                                  </div>
                              
                                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <input type="text" name="latt" value="{{old('latt')}}" class="form-control @error('latt') is-invalid @enderror" placeholder="Lattitude">
                                                @error('latt')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <input type="text" name="long" value="{{old('long')}}" class="form-control @error('long') is-invalid @enderror" placeholder="Longitude">
                                                @error('long')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" id="input-file-now" name="image" class="dropify" />
                                @error('image')
                                <span class="text-danger mt-2">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-primary" type="submit">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection