@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('customer.update', $data->id) }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('put') }}
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Pengisian</strong><small>Edit Customer</small></div>
      <div class="card-body card-block">
        <div class="form-group">
            <label for="kode" class=" form-control-label">Nama</label><input type="text" id="nama" name="nama" class="form-control" required="" value="{{$data->nama}}"></div>
        <div class="form-group">
            <label for="nama" class=" form-control-label">Email</label><input type="text" id="email" placeholder="" name="email" class="form-control" required="" value="{{$data->email}}"></div>
        <div class="form-group">
            <label for="harga" class=" form-control-label">Password</label><input type="text" id="password" name="password" placeholder="" class="form-control" required="" "></div>
        <div class="form-group">
            <label for="stock" class=" form-control-label">Saldo</label><input type="number" id="saldo" name="saldo" placeholder="" class="form-control" required="" value="{{$data->saldo}}"></div>
        <div class="form-group">
            <label for="uid" class=" form-control-label">UID</label><input type="text" id="uid" name="uid" placeholder="" class="form-control" required="" value="{{$data->uid}}"></div>

      </div>
      <button type="submit" class="btn btn-primary" id="submit">
      Submit
    </div>
  </div>
</form>

@endsection
