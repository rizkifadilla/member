<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class artikelController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');

    }
    public function index()
    {
        //
        $artikels=\App\artikel::all();
        $categories=\App\Categorie::all();
        $memberships=\App\membership::all();
        return view('artikel',compact('artikels','categories','memberships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $categories=\App\Categorie::all();
        return view('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $artikel = new \App\artikel;
        $artikel->title = $request->get('title');
        $artikel->description = $request->get('description');
        $artikel->content = $request->get('content');
        $artikel->category = $request->get('category');
        $artikel->username = $request->get('username');
        

        if($request->file('foto') == "")
        {
            $artikel->gambar = $artikel->gambar;
        }
        else
        {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();
            $request->file('foto')->move("foto/", $fileName);
            $artikel->foto = $fileName;
        }

        $artikel->update();
        $artikel->save();
        return redirect('/artikels')->with('success', 'Data buku telah ditambahkan');
        return redirect()->to('/artikels');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $artikel= \App\artikel::find($id);
        return view('full',compact('artikel','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artikel = \App\artikel::find($id);
        return view('edit',compact('artikel','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $artikel = \App\artikel::find($id);
        $artikel->title = $request->get('title');
        $artikel->description = $request->get('description');
        $artikel->content = $request->get('content');
        $artikel->category = $request->get('category');

        $artikel = \App\artikel::find($id);
            if($request->hasfile('foto')){
                $file = $request->file('foto');
                $imageresize = foto::make($file->getRealPath());
                $imageresize->resize(400,400);
                $filename = $file->getClientOriginalName();
                $imagename = pathinfo($filename,PATHINFO_FILENAME);
                $fileext = pathinfo($filename,PATHINFO_EXTENSION);
                $nameImage = $filename.".".$fileext;
                $destination = base_path()."foto/";
                $request->file('foto')->move($destination,$nameImage);
                $pathimage = $destination.$nameImage;
            if(File::exists($pathimage)){
                File::delete($pathimage);
            }
                $oldimage = $artikel->image;
                $arikel->image = $nameImage;
            }else{
                $artikel->foto = $artikel->foto;
            }

        $artikel->update();
        return redirect('/artikels');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artikel = \App\artikel::find($id);
        $artikel->delete();
        return redirect('artikels')->with('success','Data telah dihapus');
    }
    /**
    * Show a list of all of the application's users.
    *
    * @return Response
    */
    public function kategori()
    {
        $category = DB::table('artikels')->where('category', 'Tutorial');
        return view('category',compact('artikel','category'));
    }
    public function editmember($id){
        $user = \App\User::find($id);
        $user->membersip_id = $request->get('membership_id');
        $user->save();
        return redirect('artikels')->with('success','User telah diubah');
    }
    public function edit2($id)
    {
        //
        $user = \App\User::find($id);
        return view('editmembership',compact('user','id'));
    }
}
