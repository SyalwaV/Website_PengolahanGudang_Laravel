<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControllerSupplier extends Controller
{
    public function readsupplier()
    {
        $xx = new SupplierModel();
        $supplier = $xx->Readsupplier();
        return view('supplier.datasupplier', ['supplier' => $supplier]);
    }

    public function tambahsupplier()
    {
        return view('supplier.tambahsupplier');
    }

    public function simpansupplier(Request $x)
    {
        
        $xx = new SupplierModel();
        $xx->Simpansupplier($x);
        return redirect('/supplier');
    }

    public function hapussupplier($kodesup)
    {
    $xx=new SupplierModel();
    $xx->Hapussupplier($kodesup);
    return redirect('/supplier');
    }

    public function editsupplier($kodesup)
    {
        $xx=new SupplierModel();
        $supplier=$xx->Editsupplier($kodesup);
        return view('supplier.editsupplier',['supplier'=>$supplier]);
    }
    
    public function edittsupplier(Request $x)
    {
        $xx=new SupplierModel();
        $xx->Edittsupplier($x);
        return redirect('/supplier');
    }
    public function carisupplier($cari) 
    {   $xx=new SupplierModel();       
        $supplier=$xx->Carisupplier($cari);  
        return view('supplier.datasupplier',['supplier'=>$supplier]);        
    }
}