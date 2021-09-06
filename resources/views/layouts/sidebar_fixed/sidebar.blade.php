<div class="iconsidebar-menu">
   <div class="sidebar">
      <ul class="iconMenu-bar custom-scrollbar">
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-home"></i><span>Home    </span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Dashboard</li>
               <li><a href="{{route('default')}}">Ringkasan</a></li>
               {{-- <li><a href="{{route('crypto')}}">Crypto</a></li>
               <li><a href="{{route('ecommerce')}}">Ecommerce</a></li> --}}
            </ul>
         </li>
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-edit"></i><span>Data</span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header sub-header">Wilayah</li>
               <li><a href="{{route('kecamatan')}}">Kecamatan</a></li>
               <li class="iconbar-header sub-header">SPALD</li>
               <li><a href="{{route('spald.index')}}">Daftar SPALD</a></li>
               <li><a href="{{route('pengelola.index')}}">Daftar Pengelola</a></li>
               @if(Route::is('spald.create') )
               <li><a href="{{route('spald.create')}}" >Input SPALD</a></li>
               @endif 
               @if(Route::is('spald.edit') )
               <li><a href="">Edit SPALD</a></li>
               @endif
               @if(Route::is('pengelola.create') )
               <li><a href="{{route('pengelola.create')}}" >Input Pengelola</a></li>
               @endif 
               @if(Route::is('pengelola.edit') )
               <li><a href="">Edit Pengelola</a></li>
               @endif
               <li class="iconbar-header sub-header">Data Rumah</li>
               <li><a href="{{route('rumah.index')}}">Daftar Rumah</a></li>
               @if(Route::is('rumah.create') )
               <li><a href="{{route('rumah.create')}}" >Input Data Rumah</a></li>
               @endif 
               @if(Route::is('rumah.edit') )
               <li><a href="">Edit Data Rumah</a></li>
               @endif                                            
               {{-- <li><a class="disabled" href="#" onclick="return false;">Disable</a></li> --}}
            </ul>
         </li>
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-display1"></i><span>Laporan SPM</span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Realisasi</li>
               <li><a href="{{route('outcome.index')}}">Outcome</a></li>
               @if(Route::is('outcome.create') )
               <li><a href="{{route('outcome.create')}}" >Tambah Outcome</a></li>
               @endif 
               @if(Route::is('outcome.edit') )
               <li><a href="">Edit Data Outcome</a></li>
               @endif  
               <li><a href="{{route('output.index')}}">Output</a></li>
               @if(Route::is('output.create') )
               <li><a href="{{route('output.create')}}" >Tambah Output</a></li>
               @endif 
               @if(Route::is('output.edit') )
               <li><a href="">Edit Data Output</a></li>
               @endif  
               <li><a href="{{route('spm')}}">SPM</a></li>
            </ul>
         </li>
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-map"></i><span>Map</span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Map</li>
               <li><a href="{{route('map.index')}}">Titik Koordinat</a></li>
               @if(Route::is('map.create') )
               <li><a href="{{route('map.create')}}" >Tambah Koordinat</a></li>
               @endif 
               @if(Route::is('map.edit') )
               <li><a href="" >Edit Koordinat</a></li>
               @endif 
               {{-- 
               @if(Route::is('outcome.edit') )
               <li><a href="">Edit Data Outcome</a></li>
               @endif  
               <li><a href="{{route('output.index')}}">Output</a></li>
               @if(Route::is('output.create') )
               <li><a href="{{route('output.create')}}" >Tambah Output</a></li>
               @endif 
               @if(Route::is('output.edit') )
               <li><a href="">Edit Data Output</a></li>
               @endif  
               <li><a href="{{route('spm')}}">SPM</a></li> --}}
            </ul>
         </li>
      </ul>
   </div>
</div>