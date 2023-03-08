<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile(){
        
        return view('profile')
            ->with('sfull_name', 'Syahla Syafiqah Fayra')
            ->with('snim', '2141720015')
            ->with('sabsen', '23')
            ->with('sbio', 'Anak sulung nich')
            ->with('rfull_name', 'Rr. Denti Nurramadhona')
            ->with('rnim', '2141720250')
            ->with('rabsen', '22')
            ->with('rbio', 'Anak bungsu nich')
            ->with('zfull_name', 'Zahra Annisa Wahono')
            ->with('znim', '2141720016')
            ->with('zabsen', '27')
            ->with('zbio', 'Anak siapa nich')
            ;
    }

}
