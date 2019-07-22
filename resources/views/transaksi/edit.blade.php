@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('transaksi.update', $data->id) }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('put') }}
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Pengisian</strong><small>Edit Produk</small></div>
      <div class="card-body card-block">
        <div class="form-group">
            <label for="kode" class=" form-control-label">Id Customer</label><input type="text" id="kode" name="kode" class="form-control" required="" value="{{$data->customer_id}}"></div>
        <div class="form-group">
            <label for="nama" class=" form-control-label">Produk set berdasrkan id (Pisahkan dengan koma)</label><input type="text" id="nama" placeholder="0209487" name="nama" class="form-control" required="" value="{{$data->nama}}"></div>
        <div class="form-group">
            <label for="harga" class=" form-control-label">Jumlah per produk (Pisahkan dengan koma)</label><input type="number" id="harga" name="harga" placeholder="Rp 900.000.000" class="form-control" required="" value="{{$data->harga}}"></div>
        <div class="form-group">
            <label for="stock" class=" form-control-label">Stock</label><input type="number" id="stock" name="stock" placeholder="" class="form-control" required="" value="{{$data->stock}}"></div>
        <div class="form-group"><label for="harga" class=" form-control-label">Harga</label><input type="number" id="harga" placeholder="" name="harga" class="form-control" required="" value="{{$data->harga}}"></div>

      </div>
      <button type="submit" class="btn btn-primary" id="submit">
      Submit
    </div>
  </div>
</form>

@endsection
