<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = Reference::all();
        return view('references.references', compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('references.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if(isset($input['image'])){
            $input['image'] = $this->upload($input['image']);
        }else{
            $input['image'] = 'img/default.jpg';
        }
        $input['user_id'] = Auth::user()->id;
        Reference::create($input);
        return redirect('references');

    }

    public function upload($file)
    {
        $extension = $file->getClientOriginalExtension();
        $name = sha1($file->getClientOriginalName());
        $filename = date('Y-m-d-h-m-s').'-'.$name.'.'.$extension;
        $path = public_path('img/references/');
        $file->move($path, $filename);
        return 'img/references/'.$filename;
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reference = Reference::findOrFail($id);
        return view('references.edit', compact('reference'));
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
}
