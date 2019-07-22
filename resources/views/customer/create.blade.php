@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Pengisian</strong><small>Buat Produk</small></div>
      <div class="card-body card-block">
            <div class="form-group">
                    <label for="kode" class=" form-control-label">Nama</label><input type="text" id="nama" name="nama" class="form-control" required=""></div>
                <div class="form-group">
                    <label for="nama" class=" form-control-label">Email</label><input type="text" id="email" placeholder="" name="email" class="form-control" required="" ></div>
                <div class="form-group">
                    <label for="harga" class=" form-control-label">Password</label><input type="text" id="password" name="password" placeholder="password" class="form-control" required=""></div>
                <div class="form-group">
                    <label for="stock" class=" form-control-label">Saldo</label><input type="number" id="saldo" name="saldo" placeholder="900000" class="form-control" "></div>
                     <div class="form-group">
                    <label for="uid" class=" form-control-label">UID</label><input type="text" id="uid" name="uid" placeholder="" class="form-control" "></div>

      </div>
      <button type="submit" class="btn btn-primary" id="submit">
      Submit
    </div>
  </div>
</form>
@endsection
