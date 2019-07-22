@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Pengisian</strong><small>Buat Produk</small></div>
      <div class="card-body card-block">
        <div class="form-group">
            <label for="kode" class=" form-control-label">Kode</label><input type="text" id="kode" placeholder="" name="kode" class="form-control" required=""></div>
        <div class="form-group">
            <label for="nama" class=" form-control-label">Nama</label><input type="text" id="nama" placeholder="0209487" name="nama" class="form-control" required=""></div>
        <div class="form-group">
            <label for="harga" class=" form-control-label">Harga</label><input type="number" id="harga" name="harga" placeholder="Rp 900.000.000" class="form-control" required=""></div>
        <div class="form-group">
            <label for="stock" class=" form-control-label">Stock</label><input type="number" id="stock" placeholder="" name="stock" class="form-control" required=""></div>
      </div>
      <button type="submit" class="btn btn-primary" id="submit">
      Submit
    </div>
  </div>
</form>
@endsection
