<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnggotaModel extends Model
{
public function Readbarang()
 {
    $barang=DB::table('barang')->get();
    return $barang;
  }

public function Simpanbarang($x)
  {
       $barang=DB::table('barang')->insert([
      'kodebrg'=>$x->kode,
      'namabrg'=>$x->nama,
      'satuan'=>$x->satuan,
      'jumlah_beli'=>$x->beli,
      'jumlah_jual'=>$x->jual
]);
}

public function Hapusbarang($kodebrg)
{
  $barang=DB::table('barang')->where('kodebrg',$kodebrg)->delete();
}

public function Editbarang($kodebrg)
{
  $barang=DB::table('barang')->where('kodebrg',$kodebrg)->get();
  return $barang;
}

public function Edittbarang($x)
{
  $barang=DB::table('barang')->where('kodebrg',$x->kode)->update([
    'namabrg'=>$x->nama,
    'satuan'=>$x->satuan,
    'jumlah_beli'=>$x->beli,
    'jumlah_jual'=>$x->jual
  ]);
}

public function Caribarang($cari)  { 
 
  $barang=DB::table('barang')-> where('kodebrg',$cari)->get();  
  return $barang; 
 
 } 
 
}