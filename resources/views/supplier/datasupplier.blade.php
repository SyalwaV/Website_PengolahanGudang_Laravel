@extends('layout.main')
@section('content')

<style type="text/css">
.pagination li{
 float:left;
 list-style-type:none;
margin:5px;
}
</style>
<br>
<div class="container">
    <div class="container" style="display:flex; justify-content: left;" >
<input type="text" id="cari" name="cari"> <button class="btn btn-outline-success" onclick="MyCari()">Cari</button>
    </div>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand">Data Supplier</a>
          <button id="tambah" onclick="window.location.href='{{ url()->current()}}/tambah';" class="btn btn-primary" style="margin-bottom: 5px;">Tambah</button>
          </div>
  </nav>
</div>
<div class="row" style="display:flex; justify-content: center;">
    <div class="col-md-12" >
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
            <th>Kode Supplier</th>
            <th>Nama Supllier</th>
            <th>No Telpon</th>
            <th>Keterangan</th>
            <th>Alamat</th>
            <th>action</th>
            </tr>
            </thead>
          
            @foreach($supplier as $row)
            <tr>
            <td>{{$row->kodesup}}</td>
            <td>{{$row->namasup}}</td>
            <td>{{$row->telponsup}}</td>
            <td>{{$row->keterangan}}</td>
            <td>{{$row->alamatsup}}</td>
            <td>
            <a href="{{ url('supplier')}}/edit/{{$row->kodesup}}" class="btn btn-primary">Edit </a>
            <a href="{{ url('supplier') }}/hapus/{{$row->kodesup}}" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
@endforeach
</table>
</div>
</div>
</div>
</div>
<br>
<script>
function MyCari()
{
var x =document.getElementById("cari").value;
window.location.href="{{ url()->current() }}/cari/"+x+"";
}
</script>
</div>
</html>
@endsection 