@extends($layout)
@section('title', $title)

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/select2.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>{{$title}}</h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Rumah</li>
	<li class="breadcrumb-item active">{{$title}}</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>{{$title}}</h5>
            </div>
            <form class="form theme-form" action="{{route('rumah.store')}}" method="POST">
                @csrf
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <div class="form-group row">
                           <label class="col-sm-3 col-form-label">Unit SPALD</label>
                           <div class="col-sm-9">
                                <select id="id_spald" name="id_spald" class="js-example-basic-single col-sm-12" placeholder="SPALD">
                                    <option value="">Pilih Unit SPALD</option>
                                    @foreach ($spald as $item)
                                        <option value="{{$item->id_spald}}">{{$item->ksm->nama_ksm}}</option>
                                    @endforeach
                                </select>  
                                <div class="text-danger">
                                    @error('id_spald')
                                        {{ $message }}
                                    @enderror
                                </div>                               
                            </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-sm-3 col-form-label">RW</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" placeholder="RW" name="rw">
                                <div class="text-danger">
                                    @error('rw')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">RT</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" placeholder="RT" name="rt">
                                <div class="text-danger">
                                    @error('rt')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Kepala Keluaraga</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" placeholder="Nama Kepala Keluarga" name="nama_kepala_keluarga">
                                <div class="text-danger">
                                    @error('nama_kepala_keluarga')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-sm-3 col-form-label">Nomor NIK</label>
                           <div class="col-sm-9">
                                <input class="form-control digits" id="" type="text" name="nomor_nik" placeholder="Nomor NIK Kepala Keluarga">
                           </div>
                           <div class="text-danger">
                            @error('nomor_nik')
                                {{ $message }}
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah Anggota Keluarga</label>
                            <div class="col-sm-9">
                                 <input class="form-control digits" id="" type="number" name="jumlah_anggota_keluarga" placeholder="Jumlah Anggota Keluarga">
                            </div>
                            <div class="text-danger">
                             @error('jumlah_anggota_keluarga')
                                 {{ $message }}
                             @enderror
                             </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kepadatan Penduduk</label>
                            <div class="col-sm-9">
                                 <input class="form-control digits" id="" type="number" name="kepadatan_penduduk" placeholder="Kepadatan Penduduk">
                            </div>
                            <div class="text-danger">
                             @error('kepadatan_penduduk')
                                 {{ $message }}
                             @enderror
                             </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Klasifikasi</label>
                            <div class="col-sm-9">
                                <select id="kec" name="klasifikasi" class="js-example-basic-single col-sm-12" placeholder="Klasifikasi">
                                    <option value="Perdesaan">Perdesaan</option>
                                    <option value="Perkotaan">Perkotaan</option>
                                </select>                        
                            </div>
                            <div class="text-danger">
                             @error('klasifikasi')
                                 {{ $message }}
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Risiko Sanitasi</label>
                            <div class="col-sm-9">
                                <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
                                    <div class="radio radio-primary">
                                        <input id="radioinline1" type="radio" name="risiko_sanitasi" value="1" checked="false">
                                        <label class="mb-0" for="radioinline1">Sangat Rendah</label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input id="radioinline2" type="radio" name="risiko_sanitasi" value="2" checked="false">
                                        <label class="mb-0" for="radioinline2">Rendah</label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input id="radioinline3" type="radio" name="risiko_sanitasi" value="3" checked="false">
                                        <label class="mb-0" for="radioinline3">Tinggi</label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input id="radioinline4" type="radio" name="risiko_sanitasi" value="4" checked="false">
                                        <label class="mb-0" for="radioinline4">Sangat Tinggi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-danger">
                             @error('risiko_sanitasi')
                                 {{ $message }}
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kondisi Ekonomi Keluarga</label>
                            <div class="col-sm-9">
                                <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
                                    <div class="radio radio-primary">
                                        <input id="mbr" type="radio" name="pendapatan" value="MBR" checked="false">
                                        <label class="mb-0" for="mbr">MBR</label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input id="non_mbr" type="radio" name="pendapatan" value="Non MBR" checked="false">
                                        <label class="mb-0" for="non_mbr">Non MBR</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanpa Akses dan Akses Dasar</label>
                            <div class="col-sm-9">
                                <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-checkbox-ml">
                                    <div class="checkbox checkbox-primary">
                                        <input id="babs" type="checkbox" name="babs" value="1">
                                        <label class="mb-0" for="babs">BABS</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="cubluk_perkotaan" type="checkbox" name="cubluk_perkotaan" value="1">
                                        <label class="mb-0" for="cubluk_perkotaan">Cubluk Perkotaan</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="cubluk_perdesaan" type="checkbox" name="cubluk_perdesaan" value="1">
                                        <label class="mb-0" for="cubluk_perdesaan">Cubluk Perdesaan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Akses Layak</label>
                            <div class="col-sm-9">
                                <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-checkbox-ml">
                                    <div class="checkbox checkbox-primary">
                                        <input id="al1" type="checkbox" name="al_ts_individual" value="1" checked="false">
                                        <label class="mb-0" for="al1">Akses Layak Tangki Septik Individual</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="al2" type="checkbox" name="al_ts_komunal" value="1" checked="false">
                                        <label class="mb-0" for="al2">Akses Layak Tangki Septik Komunal</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="al3" type="checkbox" name="al_ipald" value="1" checked="false">
                                        <label class="mb-0" for="al3">Akses Layak SPALD-T</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Akses Aman</label>
                            <div class="col-sm-9">
                                <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-checkbox-ml">
                                    <div class="checkbox checkbox-primary">
                                        <input id="aa1" type="checkbox" name="aa_ts_individual" value="1" checked="false">
                                        <label class="mb-0" for="aa1">Akses Aman Tangki Septik Individual</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="aa2" type="checkbox" name="aa_ts_komunal" value="1" checked="false">
                                        <label class="mb-0" for="aa2">Akses Aman Tangki Septik Komunal</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="aa3" type="checkbox" name="aa_ipald" value="1" checked="false">
                                        <label class="mb-0" for="aa3">Akses Aman SPALD-T</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <div class="col-sm-9 offset-sm-3">
                     <button class="btn btn-pill btn-primary" type="submit">Submit</button>
                     <button onclick="goBack()" class="btn btn-pill btn-warning btn-air-warning" type="button" title="">Batal</button>
                    </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{route('/')}}/assets/js/select2/select2.full.min.js"></script>
<script src="{{route('/')}}/assets/js/select2/select2-custom.js"></script>
@endsection