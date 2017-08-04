<?php

namespace App\Http\Controllers;

use App\Model\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }
    
    public function index()
    {
        $about = About::all()->first();

        return view('admin.about.index', ['about' => $about]);
    }
    public function update($id, Request $request) {
        $this->validate($request, [
            'preview' => 'required',
            'detail' => 'required'
        ]);
        $about = About::find($id);
        $about->preview = $request->preview;
        $about->detail = $request->detail;
        $about->save();
        
        
        return Redirect::to('about');
    }

}
