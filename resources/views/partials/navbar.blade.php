<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="n av-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Dashboard</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    @if(session("pesan"))
    <script>
          $(function() {
              var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
              });
          Toast.fire({
                      icon: 'success',
                      title: '{{ session("pesan") }}'
                    })
      });
    </script>
  @endif
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{$cn}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-item"></div>
          @if(auth()->user()->is_admin)
          @forelse($notifications as $notification)
              <div class="alert alert-success" role="alert">
                  User Baru {{ $notification->data['name'] }} ({{ $notification->data['email'] }}) telah terdaftar.
                  <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                      Tandai dibaca
                  </a>
              </div>
              <div class="dropdown-divider"></div>
              @if($loop->last)
                  <a href="#" id="mark-all">
                      Tandai semua dibaca
                  </a>
              @endif
               @empty
                  <p>Tidak ada notif</p>
              @endforelse
          @endif
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fa fa-sign"></i>
          Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
    </ul>
</nav>