@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('histori.store') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Pengisian</strong><small>Buat Histori</small></div>
      <div class="card-body card-block">
        <div class="form-group">
            <label for="kode" class=" form-control-label">UID</label><input type="text" id="kode" placeholder="" name="kode" class="form-control" required=""></div>
        <div class="form-group">
            <label for="nama" class=" form-control-label">Saloo Awal</label><input type="text" id="nama" placeholder="" name="nama" class="form-control" required=""></div>
        <div class="form-group">
            <label for="harga" class=" form-control-label">Saldo Akhir</label><input type="number" id="harga" name="harga" placeholder="" class="form-control" required=""></div>
            <div class="form-group">
                <label for="harga" class=" form-control-label">Total Harga</label><input type="number" id="total_harga" name="harga" placeholder="" class="form-control" required="" value=""></div>
        <div class="form-group">
            <label for="stock" class=" form-control-label">Status</label><input type="number" id="stock" placeholder="" name="stock" class="form-control" required=""></div>
      </div>
      <button type="submit" class="btn btn-primary" id="submit">
      Submit
    </div>
  </div>
</form>
@endsection
