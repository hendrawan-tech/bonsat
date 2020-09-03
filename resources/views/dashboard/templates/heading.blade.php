<!-- Page Heading -->
@php
  $permission = Helper::permission();
@endphp
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{ucfirst(Request::segment(2))}}</h1>
  @if ($permission !== null)
    @if ($permission->create == 1)
      @if (Route::current()->getName() == Request::segment(3) . '.index')
        <a href="{{$permission->url . '/create'}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Add New
        </a>
      @endif
    @endif
  @endif
</div>