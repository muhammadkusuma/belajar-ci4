<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Siswa;

class Siswa extends Controller
{
    public function index()
    {
        $model= new M_Siswa();
        $data=[
            'judul' => 'Data Siswa',
            'siswa'=> $model->getAllData()
        ];
        // Load the view
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('siswa/index', $data);
        echo view('templates/v_footer');
    }
}

?>