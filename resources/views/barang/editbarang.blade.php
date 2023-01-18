@extends('layout.main')
@section('content')
<html>
    <head> 
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}"> <script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script> 
    </head> 
    <body> 
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3> Edit Data</h3>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                @foreach($barang as $row) 
                <form action="{{ url('barang' )}}/editt" method="post"> 
                {{csrf_field()}} 

                <div class="form-group">
                    <label>Kode</label>
                    <input class="form-control" type="input" name="kode" required value="{{$row->kodebrg}}"><br>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="input" name="nama" required value="{{$row->namabrg}}"><br> 
                </div>
                <div class="form-group">
                    <label>Satuan</label> 
                    <input class="form-control" type="input" name="satuan" required value="{{$row->satuan}}"><br> 
                </div>
                <div class="form-group">
                    <label>Beli</label>
                    <input class="form-control" type="input" name="beli" required value="{{$row->jumlah_beli}}"><br> 
                </div>
                <div class="form-group">
                    <label>Jual</label>    
                    <input class="form-control" type="input" name="jual" required value="{{$row->jumlah_jual}}"><br>
                </div>
                <input type="submit" value="update" class="btn btn-primary"> 
    </form> 
    @endforeach 
    </body> 
</html>
@endsection