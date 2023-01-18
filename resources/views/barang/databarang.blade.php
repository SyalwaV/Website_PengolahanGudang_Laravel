@extends('layout.main')
@section('content')
          
<style type="text/css">
.pagination li{
 float:left;
 list-style-type:none;
margin:5px;
}
</style>

<div class="container-fluid">
    <br>
    <div class="container" style="display:flex; justify-content: left;" >
    <input type="text" id="cari" name="cari" style="width: 200px"> 
      <button class="btn btn-outline-success" onclick="MyCari()">Cari</button>
    </div>
            <div class="container">
              <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand">Data Barang</a>
                    <button id="tambah" onclick="window.location.href='{{ url()->current()}}/tambah';" class="btn btn-primary" style="margin-bottom: 5px;">Tambah</button>
                    </div>
            </nav>
    </div>
<div class="row" style="display:flex; justify-content: center;" >
    <div class="col-md-12" style="width: 80%">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Beli</th>
                <th>Jual</th>
                <th>Aksi</th>
                </tr>
                </thead>

            @foreach($barang as $row)
            <tr>
            <td>{{$row->kodebrg}}</td>
            <td>{{$row->namabrg}}</td>
            <td>{{$row->satuan}}</td>
            <td>{{$row->jumlah_beli}}</td>
            <td>{{$row->jumlah_jual}}</td>
            <td>
            <a href="{{ url()->current() }}/edit/{{$row->kodebrg}}" class="btn btn-primary">Edit</a>
            <a href="{{ url()->current() }}/hapus/{{$row->kodebrg}}" class="btn btn-danger">Hapus</a>
            </td>

                </tr>
                @endforeach
                </table>
                </div>  
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