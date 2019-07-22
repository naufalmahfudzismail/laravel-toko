@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('histori.update', $data->id) }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('put') }}
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Pengisian</strong><small>Edit Produk</small></div>
      <div class="card-body card-block">
        <div class="form-group">
            <label for="kode" class=" form-control-label">UID</label><input type="text" id="uid" name="kode" class="form-control" required="" value="{{$data->uid}}"></div>
        <div class="form-group">
            <label for="nama" class=" form-control-label">Saldo Awal</label><input type="text" id="saldo_awal" placeholder="" name="nama" class="form-control" required="" value="{{$data->saldo_awal}}"></div>
        <div class="form-group">
            <label for="harga" class=" form-control-label">Saldo Akhir</label><input type="number" id="saldo_akhir" name="harga" placeholder="" class="form-control" required="" value="{{$data->saldo_akhir}}"></div>
            <div class="form-group">
                <label for="harga" class=" form-control-label">Total Harga</label><input type="number" id="total_harga" name="harga" placeholder="" class="form-control" required="" value="{{$data->total_harga}}"></div>
        <div class="form-group">
            <label for="stock" class=" form-control-label">Status</label><input type="number" id="status" name="stock" placeholder="" class="form-control" required="" value="{{$data->status}}"></div>

      </div>
      <button type="submit" class="btn btn-primary" id="submit">
      Submit
    </div>
  </div>
</form>

@endsection
