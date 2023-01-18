<?php

namespace App\Http\Controllers;

use App\Models\GudangModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class ControllerGudang extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function datagudang()
  {
    return view('gudang.datagudang');
  }
  
  // public function readgudang()
  // {
  //   $xx = new GudangModel();  
  //   $gudang = $xx->ReadGudang();
  //   return view('gudang.dtgudang',['mastergudang'=> $gudang]);
  // }

  public function readgudang(Request $request){

    $tanggalAwal = $request->get('tanggalawal');
    $tanggalAkhir = $request->get('tanggalakhir');

    $xx = new GudangModel();
    $gudang = $xx->Readgudang($tanggalAwal, $tanggalAkhir);
    return view('gudang.dtgudang')
        ->with([
            'gudang' => $gudang,
            'tanggalawal' => $tanggalAwal,
            'tanggalakhir' => $tanggalAkhir,
        ]);
    // return view("gudang.datagudang");
}

  public function gudangmaster($kodetr,$tanggal,$namasupplier,$telpon,$alamat,$keterangan,$grandtotal)
  {
      $xx=new GudangModel();
      $xx->SimpanMasterGudang($kodetr,$tanggal,$namasupplier,$telpon,$alamat,$keterangan,$grandtotal);
  }

  public function detailgudang($kodetr,$kodebrg,$harga,$jumlah){
    $xx=new GudangModel();
    $xx->SimpanDetailGudang($kodetr,$kodebrg,$harga,$jumlah);

  }

  public function CariGudang($cari){
    $xx = new GudangModel();
    $gudang = $xx->carigudang($cari);
    return view('gudang.dtgudang', ['mastergudang' => $gudang]);
  }
}