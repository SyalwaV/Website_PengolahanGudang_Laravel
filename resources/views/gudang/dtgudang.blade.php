@extends('layout.main')
@section('content')
<body>
      <style type="text/css">
          .pagination li {
              float: left;
              list-style-type: none;
              margin: 5px;
          }
      </style>
      <div class="container flex-grow-1 container-p-y">
          <form action="{{ url('dtgudang') }}" method="get">
              <div class="row mb-4">
                  <div class="col-3">
                      <input type="date" class="form-control form-control-sm" id="tanggalawal" name="tanggalawal" value="">
                  </div>
                  <div class="col-3">
                      <input type="date" class="form-control form-control-sm" id="tanggalakhir" name="tanggalakhir">
                  </div>
                  <div class="col-4">
                      <button type="submit" class="btn btn-outline-warning btn-sm">Cari</button>
                      <a href="{{ url('dtgudang') }}" class="btn btn-secondary btn-sm ms-3" >Batal</a>
                  </div>
              </div>
          </form>
          <!-- Basic Layout & Basic with Icons -->
          <div class="row">
              <div class="col-xxl">
                  <div class="card shadow mb-5">
                      <div class="card-header py-3">
                          <div class="row">
                              <div class="col-8">
                                  <h5 class="mb-2 mt-2 text-dark mr-4 ">
                                      Daftar Data Gudang
                                  </h5>
                              </div>
                              <div class="col-4">
                                  <div class="d-sm-flex float-end">
                                      <button id="tambah"
                                          class="d-none d-sm-inline-block btn btn-sm btn-brand shadow-sm "
                                          onclick="window.location.href='http://localhost/latihan12/datagudang/';">Tambah</button>
                                  </div>
                              </div>
                          </div>


                      </div>
                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                          @endif
                          <div class="table-responsive text-nowrap">
                              <table class="table table-bordered table-striped text-center">
                                  <thead>
                                      <tr>
                                          <th>Kode Transaksi</th>
                                          <th>Tanggal</th>
                                          <th>Nama Supplier</th>
                                          <th>Grand Total</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @php
                                          $total = 0;
                                      @endphp
                                      @foreach ($gudang as $row)
                                          @php
                                              $total = $total + $row->grandtotal;
                                          @endphp
                                          <tr>
                                              <td>{{ $row->kodetr }}</td>
                                              <td>{{ $row->tanggal }}</td>
                                              <td>{{ $row->namasupplier }}</td>
                                              <td>{{ $row->grandtotal }}</td>
                                              {{-- <td>{{$row->jumlah}}</td> --}}

                                              <td>
                                                  <a href="" data-bs-toggle="modal" data-bs-target="#detail{{ $row->kodetr}}"
                                                      class="btn-warning btn-sm text-decoration-none">Detail</a>
                                                  {{-- <a href="" onclick="return confirm('Apakah anda ingin menghapus ?')" class="btn-danger btn-sm text-decoration-none">Hapus</a> --}}
                                              </td>
                                          </tr>
                                          <!-- Modal -->
                                          <div class="modal fade" id="detail{{ $row->kodetr}}" tabindex="-1"
                                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Detail Data
                                                              gudang</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                              aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <div class="row">
                                                              <div class="col-md-4">Kode Transaksi</div>
                                                              <div class="col-md-1">:</div>
                                                              <div class="col-md-6">{{$row->kodetr}}</div>
                                                              <div class="col-md-4">Tanggal</div>
                                                              <div class="col-md-1">:</div>
                                                              <div class="col-md-6">{{$row->tanggal}}</div>
                                                              <div class="col-md-4">Nama Supplier</div>
                                                              <div class="col-md-1">:</div>
                                                              <div class="col-md-6">{{$row->namasupplier}}</div>
                                                              <div class="col-md-4">Telepon</div>
                                                              <div class="col-md-1">:</div>
                                                              <div class="col-md-6">{{$row->telpon}}</div>
                                                              <div class="col-md-4">Alamat</div>
                                                              <div class="col-md-1">:</div>
                                                              <div class="col-md-6">{{$row->alamat}}</div>
                                                              <div class="col-md-4">Keterangan</div>
                                                              <div class="col-md-1">:</div>
                                                              <div class="col-md-6">{{$row->keterangan}}</div>
                                                          </div>
                                                          <div class="row mt-2 fw-bold">
                                                              <div class="col">Kode</div>
                                                              <div class="col">Nama</div>
                                                              <div class="col text-center">Harga</div>
                                                              <div class="col text-center">Jumlah</div>
                                                              <div class="col text-center">Subtotal</div>
                                                          </div>
                                                          <hr class="m-0">
                                                          
                                                          @foreach ($row->barang as $barang)
                                                          <div class="row">
                                                              <div class="col">{{ $barang->kodebrg }}</div>
                                                              <div class="col">{{ $barang->namabrg }}</div>
                                                              <div class="col text-center">{{ $barang->harga }}</div>
                                                              <div class="col text-center">{{ $barang->jumlah." ".$barang->satuan}}</div>
                                                              <div class="col text-center">{{ ($barang->harga * $barang->jumlah) }}</div>
                                                          </div>
                                                          @endforeach
                                                          <hr class="m-0">
                                                          <div class="row fw-bold">
                                                              <div class="col-md-9 text-end">Total :</div>
                                                              <div class="col-md-3 text-center">{{ $row->grandtotal }}</div>
                                                          </div>
                                                      </div>
                                                      {{-- <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary"
                                                              data-bs-dismiss="modal">Close</button>
                                                      </div> --}}
                                                  </div>
                                              </div>
                                          </div>
                                      @endforeach
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <td colspan="3" class="fw-bold">Total</td>
                                          <td>Rp {{ $total }}</td>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>


                      </div>
                  </div>
              </div>
          </div>
      </div>


  </body>
  <script>
      function MyCari() {
          var x = document.getElementById("cari").value;
          window.location.href = "{{ url('barang') }}/cari/" + x + "";
      }

      function BatalCari() {
          window.location.href = "{{ url('barang') }}";
      }

      
  </script>
{{-- <div class="col-md-12">
  Tanggal : {{$row->tanggal}}
</div>
<div class="col-md-12">
  Supplier : {{$row->namasup}}
</div>
<div class="col-md-12">
  Grand Total : {{$row->grandtotal}}
</div> --}}
            </body>
            </html> 
            @endsection