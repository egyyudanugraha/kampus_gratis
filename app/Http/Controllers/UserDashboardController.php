<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function administrasiPengguna(){
        return view ('admin.dashboard-user.detail-user');
    }

    public function administrasiUpdate()
    {
        
    }

    public function dataKeluarga()
    {
        return view('admin.dashboard-user.dataKeluarga');
    }

    public function dokumenPenting()
    {
        return view('admin.dashboard-user.dokumenPenting');
    }

    public function testingDB(){

        $berita = Berita::all();
        return response()->json([
            'msg' => $berita
        ]);
    }
}
