@extends('layouts.master')
@section('title', 'Buku Tamu | Guestbook' )
@section('breadcumb')
<section class="content-header">
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Guest Book</a></li>
    <li class="active">Data</li>
  </ol>
</section>   
@endsection
@section('content')
    
<section class="content-header">
  <h3>
      Data Tamu
  </h3>
</section><br>
<div class="row">
  <div class="col-md-12">
    <form method="post" action="tamu/add">
      {{ csrf_field() }}
      <div class="form-group row">
        <label for="date" class="col-sm-1 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" name="date" id="date">
        </div>
        <label for="from_time" class="col-sm-1 col-form-label">Dari Jam</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="from_time" id="from_time">
        </div>
        <label for="to_time" class="col-sm-1 col-form-label">sampai Jam</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="to_time" id="to_time">
        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-sm-1 col-form-label">Nama</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <label for="from" class="col-sm-1 col-form-label">Nama Perusahaan</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="from" id="from">
        </div>
        <label for="identity_card" class="col-sm-1 col-form-label">No KTP / ID Card</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="identity_card" id="identity_card">
        </div>
        <label for="contact" class="col-sm-1 col-form-label">Kontak</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="contact" id="contact">
        </div>
      </div>
      <div class="form-group row">
        <label for="meet_to" class="col-sm-1 col-form-label">Bertemu Dengan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="meet_to" id="meet_to">
        </div>
        <label for="section" class="col-sm-1 col-form-label">Bagian</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="section" id="section">
        </div>
        
      </div>
      <div class="form-grup row">
        <label for="necessity" class="col-sm-1 col-form-label">Keperluan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="necessity" id="necessity">
        </div>
        <label for="info" class="col-sm-1 col-form-label">Keterangan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="info" id="info">
        </div>
      </div>
      <br>
      <div class="form-grup row">
        <label for="image" class="col-sm-1 col-form-label" id="my_camera">Foto</label>
        <div id="results" ></div>
        <!-- <input type=button value="Ambil Photo" onClick="take_snapshot()"> -->
        <input type="hidden" name="image"  class="image-tag">
        <div class="col-sm-3">
        </div>
        <label class="col-sm-1 col-form-label"></label>
        <div class="col-sm-3" id="results">
        </div>
      </div>
      <br>
      <button type="submit" class="btn absen-masuk btn-success" onClick="take_snapshot()">Input</button>
    </form>
    <section class="content-header">
      <h3 align="center">
          Data Tamu
      </h3>
    </section>
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Asal</th>
                            <th>Identitas</th>
                            <th>Bertemu</th>
                            <th>Bagian</th>
                            <th>Keperluan</th>
                            <th>Dari Jam</th>
                            <th>Sampai Jam</th>
                            {{-- <th>Foto</th> --}}
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  ?>
                  @foreach($guest as $g)
                      <tr>
                          <td>{{$no++}}</td>
                          <td>{{$g->date}}</td>
                          <td>{{$g->name}}</td>
                          <td>{{$g->from}}</td>
                          <td>{{$g->identity_card}}</td>
                          <td>{{$g->meet_to}}</td>
                          <td>{{$g->section}}</td>
                          <td>{{$g->necessity}}</td>
                          <td>{{$g->from_time}}</td>
                          <td>{{$g->to_time}}</td>
                          {{-- <td><a href="{{$g->image}}"></td> --}}
                      </tr>
                  @endforeach
                </tbody>
                {{ $guest->links() }}
              </table>
              
  </div>
</div>

@endsection




                

