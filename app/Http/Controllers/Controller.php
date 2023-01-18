<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function readbarang()
    {
        $xx = new AnggotaModel();
        $barang = $xx->Readbarang();
        return view('barang.databarang', ['barang' => $barang]);
    }

    public function tambahbarang()
    {
        return view('barang.tambahbarang');
    }

    public function simpanbarang(Request $x)
    {
        $this->validate($x, [
            'kode' => 'required|min:1|max:20',
            'nama' => 'required|min:1|max:200',
            'satuan' => 'required|min:1|max:20',
            'beli' => 'required|numeric',
            'jual' => 'required|numeric'
        ]);
        $xx = new AnggotaModel();
        $xx->Simpanbarang($x);
        return redirect('/barang');
    }

    public function hapusbarang($kodebrg)
    {
    $xx=new AnggotaModel();
    $xx->Hapusbarang($kodebrg);
    return redirect('/barang');
    }

    public function editbarang($kodebrg)
    {
        $xx=new AnggotaModel();
        $barang=$xx->Editbarang($kodebrg);
        return view('barang.editbarang',['barang'=>$barang]);
    }
    
    public function edittbarang(Request $x)
    {
        $xx=new AnggotaModel();
        $xx->Edittbarang($x);
        return redirect('/barang');
    }

    public function caribarang($cari) 
    {   $xx=new AnggotaModel();       
        $barang=$xx->Caribarang($cari);  
        return view('barang.databarang',['barang'=>$barang]);        
    }
}
