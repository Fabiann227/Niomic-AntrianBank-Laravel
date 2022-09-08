<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Antrian extends Controller
{
    public function index() {
        $data['antri_cs'] = 0;
        $data['antri_teller1'] = 0;
        $data['antri_teller2'] = 0;
        $data['antri'] = "-";
        return view('antrian', $data);
    }

    public function antri_cs($cs, $teller1, $teller2)
    {
        $data['antri_cs'] = $cs+1;
        $data['antri_teller1'] = $teller1;
        $data['antri_teller2'] = $teller2;
        $data['antri'] = "cs";
        return view('antrian', $data);
    }

    public function antri_teller1($cs, $teller1, $teller2)
    {
        $data['antri_cs'] = $cs;
        $data['antri_teller1'] = $teller1+1;
        $data['antri_teller2'] = $teller2;
        $data['antri'] = "tl1";
        return view('antrian', $data);
    }

    public function antri_teller2($cs, $teller1, $teller2)
    {
        $data['antri_cs'] = $cs;
        $data['antri_teller1'] = $teller1;
        $data['antri_teller2'] = $teller2+1;
        $data['antri'] = "tl2";
        return view('antrian', $data);
    }
}
