<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\BarangModel;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        return view('barang.index');
    }
    
    public function get(){
        $database = BarangModel::all();
        return view('barang.get',['database' => $database]);
    }

    public function delete($id){
        $database = BarangModel::find($id);
        if($database){
            if($database->delete()){
                return [
                    'success' => true,
                    'message' => 'Data Berhasil Di Hapus'
                ];
            }else{
                return [
                    'success' => false,
                    'message' => 'Data Gagal Di Hapus'
                ];
            }
        }else{
            return [
                'success' => false,
                'message' => 'Data Tidak Di Temukan'
            ];
        }
    }
}
