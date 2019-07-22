
@extends('layouts.app')
@section('content')
<button type="button" name="button" class="btn btn-primary" href="{{route('customer.create')}}"><a href="{{route('customer.create')}}">Tambah Data</a></button>
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
            <th>Id</th>
            <th>Email</th>
             <th>UID</th>
            <th>Nama</th>
            <th>Saldo</th>
            <th>Tanggal Daftar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datas as $data)
          <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->uid}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->saldo}}</td>
            <td>{{$data->created_at}}</td>
            <td>
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                  <a class="dropdown-item" href="{{route('customer.edit', $data->id)}}"> Edit </a>
                  <form action="{{ route('customer.destroy', $data->id) }}" class="pull-left"  method="post">
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
