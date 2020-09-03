<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard/homes/index">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-globe-americas"></i>
      </div>
      <div class="sidebar-brand-text mx-3">WAN APP <sup>v.1</sup></div>
    </a>
    <!-- Nav Item - Dashboard -->
    @php
      $role_id = Auth::user()->role_id;
      $main_menu = '/' . Request::segment(1) . '/' . Request::segment(2);
      // $main_submenu = '/' . Request::segment(1) . '/' . Request::segment(2) . '/' . Request::segment(3);
      $main_submenu = '/' . Request::path(); 
      
      $menu = DB::table('menus')
          ->join('access_menus', 'menus.id', '=', 'access_menus.menu_id')
          ->where('access_menus.role_id', $role_id)
          ->get();
      // dd($role_id)
    @endphp

    @foreach ($menu as $m)
      <hr class="sidebar-divider my-0">
      {{-- {{var_dump($role_id)}} --}}
      <li class="nav-item {{$m->url == $main_menu ? 'active' : ''}}">
        <a class="nav-link {{$m->url == $main_menu ? '' : 'collapsed'}}" href="#" data-toggle="collapse" data-target="#{{$m->menu}}" aria-expanded="{{$m->url == $main_menu ? 'true' : 'false'}}" aria-controls="{{$m->menu}}">
          <i class="{{$m->icon}}"></i>
          <span>{{$m->menu}}</span>
        </a>
        <div id="{{$m->menu}}" class="collapse  {{$m->url == $main_menu ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            @php
              $submenu = DB::table('submenus')
              ->join('access_submenus', 'submenus.id', '=', 'access_submenus.submenu_id')
              ->where(['access_submenus.role_id' => $role_id, 'submenus.menu_id' => $m->menu_id])
              ->get();
              // $submenu = \App\AccessSubmenu::where('role_id', $role_id)->first();
            @endphp

            @foreach ($submenu as $sm)
            {{-- {{var_dump($main_submenu)}} --}}
            @php
               $exsubmenu = explode('/', $sm->url);
               $uri = explode('/', Request::path());
               $uri2 = explode('/', Request::segment(3));
               $email = Auth::user()->email;
              //  var_dump(end($exsubmenu));
              // echo count($uri);
              // print_r($uri);
              // print_r($exsubmenu[2]);
              // echo $uri[2];
              // print_r($exsubmenu['3']);
            @endphp
              @if (end($exsubmenu) == end($uri) || $exsubmenu[2] == $uri2)
                @if((count($uri) == 3) && end($exsubmenu) == end($uri))
                  <a class="collapse-item active" href="{{$sm->url}}">{{$sm->submenu}}</a>
                @else
                <a class="collapse-item" href="{{$sm->url}}">{{$sm->submenu}}</a>
                @endif
              @elseif(count($exsubmenu) > 3)
              {{-- @php
              echo "berhasil";
               print_r($uri);   
              @endphp --}}
                @if($uri[2] == $exsubmenu[3])
                <a class="collapse-item active" href="{{$sm->url}}">{{$sm->submenu}}</a>
                @else
                <a class="collapse-item " href="{{$sm->url}}">{{$sm->submenu}}</a>
                @endif
              @else
                <a class="collapse-item " href="{{$sm->url}}">{{$sm->submenu}}</a>
              @endif
            @endforeach
          </div>
        </div>
      </li>
    @endforeach
    
    <div class="text-center d-none d-md-inline mt-4">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>
  <!-- End of Sidebar -->