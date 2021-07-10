<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/" class="nav-link {{request()->is('/') ? 'active' : ''}}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Data Dasar
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/kecamatan" class="nav-link {{request()->is('kecamatan') ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Wilayah</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            SPM
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/spald" class="nav-link {{request()->is('spald') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>SPALD</p>
              </a>
            </li>
          </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/rumah" class="nav-link {{request()->is('rumah') ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Rumah</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/target" class="nav-link {{request()->is('target') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Target Capaian</p>
              </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/realisasi" class="nav-link {{request()->is('realisasi') ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Realisasi Capaian</p>
            </a>
          </li>
      </ul>
      </li>
      <li class="nav-item">
        <a href="/koordinat" class="nav-link {{request()->is('koordinat') ? 'active' : ''}}">
          <i class="nav-icon fas fa-map"></i>
          <p>
            Koordinat
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/foto/spald" class="nav-link {{request()->is('foto/spald') ? 'active' : ''}}">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Dokumentasi
          </p>
        </a>
      </li>
</nav>