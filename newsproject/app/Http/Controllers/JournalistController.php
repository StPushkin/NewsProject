<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JournalistInfo;

class JournalistController extends Controller

{
    public function editJournalist(JournalistInfo $journalist) { 
		return view();
	}

    public function updateJournalist(Request $request, JournalistInfo $journalist) { 
        $journalist->journalist_name=$request->journalist_name;
        $journalist->journalist_surname=$request->journalist_surname;
        $journalist->journalist_photo=$request->journalist_photo;
        $journalist->journalist_biography=$request->journalist_biography;
        $journalist->update();
		return redirect();
    }
    
}
