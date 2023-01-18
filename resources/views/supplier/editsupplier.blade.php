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
            @foreach($supplier as $row) 
                <form action="{{ url('supplier' )}}/editt" method="post"> 
                {{csrf_field()}} 

                <div class="form-group">
                    <label>Kode Supplier</label>
                    <input class="form-control" type="input" name="kode" required value="{{$row->kodesup}}"><br> 
                </div>
                <div class="form-group">
                    <label>Nama Supplier</label>
                    <input class="form-control" type="input" name="nama" required value="{{$row->namasup}}"><br> 
                </div>
                <div class="form-group">
                    <label>Nomor Telpon</label>
                    <input class="form-control" type="input" name="telpon" required value="{{$row->telponsup}}"><br> 
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input class="form-control" type="input" name="ket" required value="{{$row->keterangan}}"><br> 
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" type="input" name="almt" required value="{{$row->alamatsup}}"><br>
                </div>
                <br>
                <div>
                <input type="submit" value="update" class="btn btn-primary"> 
                </div>
    </form> 
    @endforeach 
    </body> 
</html>
@endsection