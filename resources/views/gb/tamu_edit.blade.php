@extends('layouts.master')
@section('title', 'Buku Tamu | Edit' )
@section('breadcumb')
<section class="content-header">
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Buku Tamu</a></li>
    <li class="active">Edit</li>
  </ol>
</section>   
@endsection
@section('content')

  @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($message = Session::get('error'))
	  <div class="alert alert-danger alert-block">
	    <button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($message = Session::get('warning'))
	  <div class="alert alert-warning alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	</div>
	@endif

	@if ($message = Session::get('info'))
	  <div class="alert alert-info alert-block">
	    <button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($errors->any())
	  <div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		Please check the form below for errors
	</div>
	@endif

<section class="content-header">
<br>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
  Foto Identitas
</button>

  <h3>
      Data Tamu
  </h3>
</section><br>
<div class="row">
  <div class="col-md-12">
    <form method="post" action="/tamu1/update/{{$tamu->id}}">
      {{ csrf_field() }}
      {{method_field('PUT')}}
      
        <div class="form-group row">
          <label for="id_image" class="col-sm-1 col-form-label">Foto id</label>
          <div class="col-sm-1">
            <input type="text" class="form-control" name="id_image" id="id_image" value="{{$tamu->id_image}}"> 
          </div>
          <div class="col-sm-1">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2"><b>Cari</b> <span class="glyphicon glyphicon-search"></span></button>
          </div>
          <label for="date" class="col-sm-1 col-form-label">Tanggal</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="date" id="date" value="{{$tamu->date}}">
            @if($errors->has('date'))
                <div class="text-danger">
                    {{ $errors->first('date')}}
                </div>
            @endif
          </div>
          <label for="from_time" class="col-sm-1 col-form-label">Dari Jam</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="from_time" id="from_time" value="{{$tamu->from_time}}">
            @if($errors->has('from_time'))
            <div class="text-danger">
                {{ $errors->first('from_time')}}
            </div>
            @endif
          </div>
          <label for="to_time" class="col-sm-1 col-form-label">sampai Jam</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="to_time" id="to_time" value="{{$tamu->to_time}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-1 col-form-label">Nama</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="name" id="name" value="{{$tamu->name}}">
          </div>
          <label for="from" class="col-sm-1 col-form-label">Nama Perusahaan</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="from" id="from" value="{{$tamu->from}}">
          </div>
          <label for="identity_card" class="col-sm-1 col-form-label">No KTP / ID Card</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="identity_card" id="identity_card" value="{{$tamu->identity_card}}">
          </div>
          <label for="contact" class="col-sm-1 col-form-label">Kontak</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="contact" id="contact" value="{{$tamu->contact}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="meet_to" class="col-sm-1 col-form-label">Bertemu Dengan</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="meet_to" id="meet_to" value="{{$tamu->meet_to}}">
          </div>
          <label for="section" class="col-sm-1 col-form-label">Bagian</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="section" id="section" value="{{$tamu->section}}">
          </div>
          
        </div>
        <div class="form-grup row">
          <label for="necessity" class="col-sm-1 col-form-label">Keperluan</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="necessity" id="necessity" value="{{$tamu->necessity}}">
          </div>
          <label for="info" class="col-sm-1 col-form-label">Keterangan</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="info" id="info" value="{{$tamu->info}}">
          </div>
          <br>
        </div>

        {{-- foto --}}
        <div class="row">
            {{-- <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div> --}}
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </div>
        </div>
    </form>
    





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Foto Identitas</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="tamu1/foto">
         {{ csrf_field() }}
          <div class="row">
              <div class="col-md-6">
                  <div id="my_camera"></div>
                  <br/>
                  <input type=button class="btn btn-primary btn-sm" value="Ambil Foto" onClick="take_snapshot()">
                  <input type="hidden" name="image" class="image-tag">
              </div>
              <div class="col-md-6">
                  <div id="results">Hasil foto anda...</div>
              </div>
              <div class="col-md-12">
                  <br/>
                  <button class="btn btn-success">Submit</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Galeri</h4>
      </div>
      <div class="modal-body">
          <table id="lookup" class="table table-bordered table-striped">
                <thead>
                    <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                    </tr>
                </thead>
                {{$foto->links()}}
                <tbody>
                  <?php
                  $no = 1;
                  ?>
                  @foreach($foto as $f)
                      <tr>
                          <td>{{$f->id}}</td>
                          <td> <img src="{{$f->image}}" ></td>
                      </tr>
                  @endforeach
                </tbody>
                
              </table>
      </div>
    </div>
  </div>
</div>

@endsection





                

