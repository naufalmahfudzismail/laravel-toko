@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('produk.update', $data->id) }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('put') }}
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Pengisian</strong><small>Edit Produk</small></div>
      <div class="card-body card-block">
        <div class="form-group">
            <label for="kode" class=" form-control-label">Kode</label><input type="text" id="kode" name="kode" class="form-control" required="" value="{{$data->kode}}"></div>
        <div class="form-group">
            <label for="nama" class=" form-control-label">Nama</label><input type="text" id="nama" placeholder="" name="nama" class="form-control" required="" value="{{$data->nama}}"></div>
        <div class="form-group">
            <label for="harga" class=" form-control-label">Harga</label><input type="number" id="harga" name="harga" placeholder="90000" class="form-control" required="" value="{{$data->harga}}"></div>
        <div class="form-group">
            <label for="stock" class=" form-control-label">Stock</label><input type="number" id="stock" name="stock" placeholder="" class="form-control" required="" value="{{$data->stock}}"></div>
        <!-- <div class="form-group"><label for="kantor_cabang" class=" form-control-label">Kantor Cabang</label>
          <select class="form-control" name="kantor_cabang" required="">
            <option value=""></option>
            <option value="BND">KCP Bandung</option>
            <option value="DPK">KCP Depok</option>
            <option value="TGS">KCP Tangsel</option>
          </select>
        </div> -->
        <div class="form-group"><label for="harga" class=" form-control-label">Harga</label><input type="number" id="harga" placeholder="" name="harga" class="form-control" required="" value="{{$data->harga}}"></div>

      </div>
      <button type="submit" class="btn btn-primary" id="submit">
      Submit
    </div>
  </div>
</form>

@endsection
