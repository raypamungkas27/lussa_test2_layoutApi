<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class BlogCT extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/blog');
        $data = json_decode($response->body(),true);
        // foreach ($data as $key => $value) {
        //     dump($value['id']);
        // }
        // die;
        return view("index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $image = $request->file('file');
        $response = Http::attach('file', file_get_contents($image), 'image.jpg')
        ->post('http://127.0.0.1:8000/api/blog', [
            'judul_blog' => $request->judul_blog,
            'isi_blog' => $request->isi_blog,
            'kategori' => $request->kategori,
            'file' => $request->file,
        ]);

        return redirect()->back()->with(['message' => json_decode($response->body(),true)]);
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
        $response = Http::get('http://127.0.0.1:8000/api/blog/'.$id);
        $data = json_decode($response->body(),true);

        return view('show',compact('data'));
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
        $response = Http::get('http://127.0.0.1:8000/api/blog/'.$id);
        $data = json_decode($response->body(),true);

        return view('edit',compact('data'));
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


        if ($request->file('file')) {

            $image = $request->file('file');
            
            $response = Http::attach('file', file_get_contents($image), 'image.jpg')
            ->post('http://127.0.0.1:8000/api/blogedit2/'.$id, [
                'judul_blog' => $request->judul_blog,
                'isi_blog' => $request->isi_blog,
                'kategori' => $request->kategori,
                'file' => $request->file,
            ]);
        }else{
            $response = Http::post('http://127.0.0.1:8000/api/blogedit2/'.$id, [
                'judul_blog' => $request->judul_blog,
                'isi_blog' => $request->isi_blog,
                'kategori' => $request->kategori,
     
            ]);
        }



        return redirect("/blog")->with(['message' => json_decode($response->body(),true)]);

        
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
    }

    public function blogHapus($id){
        $response = Http::get('http://127.0.0.1:8000/api/hapus2/'.$id);

        return redirect("/blog")->with(['message' => json_decode($response->body(),true)]);
    }
}
