<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use App\Tamu;
use App\Foto;
use Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $guest = Guest::paginate(5);
        return view('gb.data', ['guest' => $guest]);
    }
    

    public function tamu()
    {
        $tamu = \DB::table('tamu')->orderBy('id', 'desc')->paginate(5);
        $foto = \DB::table('foto')->orderBy('id', 'desc')->paginate(20);
        return view('gb.tamu', ['tamu'=> $tamu], ['foto' =>$foto]);
    }
    public function masuk(Request $request)
    {
        $this->validate($request,[
    		'date' => 'required',
    		'from_time' => 'required',
    		
    	]);
        Tamu::create([
            'date' => $request->date,
            'from_time' => $request->from_time,
            'to_time' => $request->to_time,
            'name' => $request->name,
            'from' => $request->from,
            'identity_card' => $request->identity_card,
            'contact' => $request->contact,
            'meet_to' => $request->meet_to,
            'section' => $request->section,
            'necessity' => $request->necessity,
            'info' => $request->info,
            'id_image' => $request->id_image,
            
        ]);
        
        // $img = $_POST['image'];
        // $folderPath = "upload/";
    
        // $image_parts = explode(";base64,", $img);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
    
        // $image_base64 = base64_decode($image_parts[1]);
        // $fileName = uniqid() . '.png';
    
        // $file = $folderPath . $fileName;
        // file_put_contents($file, $image_base64);

        
    
        return redirect('/tamu1')->with(['success' => 'Data berhasil di input']);
    }
    public function foto(Request $request)
    {
        $this->validate($request,[
    		'image' => 'required',
    		
    	]);
        Foto::create([
            'image' => $request->image
            
        ]);
        $img = $_POST['image'];
        $folderPath = "upload/";
    
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
    
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
    
        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);

        
        
        return redirect('/tamu1')->with(['success' => 'Foto berhasil di upload']);
    }
    public function edit($id)
    {
        $tamu = Tamu::find($id);
        $foto = \DB::table('foto')->orderBy('id', 'desc')->paginate(20);
        return view('gb.tamu_edit', ['tamu' => $tamu], ['foto' => $foto]);
    }
    public function update ($id, Request $request)
    {
        $this->validate($request,[
    		'date' => 'required',
    		'from_time' => 'required',
    		
    	]);

        $tamu = Tamu::find($id);
        $tamu->date = $request->date;
        $tamu->from_time = $request->from_time;
        $tamu->to_time = $request->to_time;
        $tamu->name = $request->name;
        $tamu->from = $request->from;
        $tamu->identity_card = $request->identity_card;
        $tamu->contact = $request->contact;
        $tamu->meet_to = $request->meet_to;
        $tamu->section = $request->section;
        $tamu->necessity = $request->necessity;
        $tamu->info = $request->info;
        $tamu->id_image = $request->id_image;
        $tamu->save();
        
        return redirect('/tamu1')->with(['success' => 'Data berhasil di edit!']);
    }
}
