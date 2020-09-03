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
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Menu</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Menu</th>
                      <th>Icon</th>
                      <th>Url</th>
                      <th>Status</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($menu as $m)
                          <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$m->menu}}</td>
                              <td class="text-primary"><i class="{{$m->icon}}"></i></td>
                              <td>{{$m->url}}</td>
                              <td>{!!$m->is_active == 1 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Non Active</span>'!!}</td>
                              <td class="d-flex justify-content-center">
                                @if (Helper::permission()->edit == 1)
                                    <a href="{{Helper::permission()->url . '/' . $m->id . '/edit'}}" class="btn btn-sm btn-primary btn-circle mr-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                @endif
                                @if (Helper::permission()->delete == 1)
                                    <form action="{{Helper::permission()->url . '/' . $m->id}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                                    </form>
                                @endif
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection