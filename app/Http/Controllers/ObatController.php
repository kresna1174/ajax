<?php

namespace App\Http\Controllers;
use App\Models\BarangModel;

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index(){
        return view('obat.index');
    }
    
    public function get(){
        $database =  BarangModel::all();
        return view('obat.get', ['database' => $database]);
    }
    
    public function delete($id){
        $database = BarangModel::find($id);
        if($database){
            if($database->delete()){
                return [
                    'success' => true,
                    'message' => 'Data berhasil Di Hapus'
                ];
            }else{
                return [
                    'success' => false,
                    'message' => 'Data Gagal Di Hapus'
                ];
            }
        }else{
            return[
                'success' => false,
                'message' => 'Gagal Di Hapus'
            ];
        }
    }
}
