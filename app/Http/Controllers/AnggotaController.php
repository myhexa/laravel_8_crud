<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    //
    public function semua(){
        $anggota = DB::table('select * from anggota');
        return response([
            'success' => true,
            'message' => 'List Semua Supplier',
            'data' => $anggota
        ], 200);
    }
}
