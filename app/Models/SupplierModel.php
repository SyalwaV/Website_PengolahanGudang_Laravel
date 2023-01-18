<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SupplierModel extends Model
{
public function Readsupplier()
 {
    $supplier=DB::table('supplier')->get();
    return $supplier;
  }

public function Simpansupplier($x)
  {
       $supplier=DB::table('supplier')->insert([
      'kodesup'=>$x->kode,
      'namasup'=>$x->nama,
      'telponsup'=>$x->telpon,
      'keterangan'=>$x->ket,
      'alamatsup'=>$x->almt
]);
}

public function Hapussupplier($kodesup)
{
  $supplier=DB::table('supplier')->where('kodesup',$kodesup)->delete();
}


public function Editsupplier($kodesup)
{
  $supplier=DB::table('supplier')->where('kodesup',$kodesup)->get();
  return $supplier;
}

public function Edittsupplier($x)
{
  $supplier=DB::table('supplier')->where('kodesup',$x->kode)->update([
    'namasup'=>$x->nama,
    'telponsup'=>$x->telpon,
    'keterangan'=>$x->ket,
    'alamatsup'=>$x->almt
  ]);
}

public function Carisupplier($cari)  { 
 
  $supplier=DB::table('supplier')-> where('kodesup',$cari)->get();  
  return $supplier; 
 
 } 

}