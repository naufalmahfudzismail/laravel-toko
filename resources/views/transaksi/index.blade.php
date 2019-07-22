
@extends('layouts.app')
@section('content')
<button type="button" name="button" class="btn btn-primary" href="#"><a href="#">Tambah Data</a></button>
<br>
<br>
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <strong class="card-title">Data Table</strong>
    </div>
    <div class="card-body">
      <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>customer</th>
            <th>Set Produk</th>
            <th>Set Jumlah Per Produk</th>
            <th>Set Subtotal Per Produk</th>
            <th>Total Harga</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datas as $data)
          <tr>
            <td>{{$data->customer}}</td>
            <td>{{$data->produk}}</td>
            <td>{{$data->jumlah_per_produk}}</td>
            <td>{{$data->subtotal_per_produk}}</td>
            <td>{{$data->total_harga}}</td>
            <td>
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                  <a class="dropdown-item" href="#"> Edit </a>
                  <form action="{{ route('transaksi.destroy', $data->id) }}" class="pull-left"  method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                    </button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
