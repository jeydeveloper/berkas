<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipeBerkas;
use Auth;
use Session;

class TipeberkasController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $tipeberkas = TipeBerkas::orderby('tb_id', 'desc')->paginate(5);
        return view('tipeberkas.index', compact('tipeberkas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipeberkas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tb_name'=>'required',
            ]);

        $tb_name = $request['tb_name'];

        $tipeberkas = TipeBerkas::create($request->only('tb_name'));

        return redirect()->route('tipeberkas.index')
            ->with('flash_message', 'Tipe Berkas,
             '. $tipeberkas->tb_name.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('tipeberkas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipeberkas = TipeBerkas::findOrFail($id);

        return view('tipeberkas.edit', compact('tipeberkas'));
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
        $this->validate($request, [
            'tb_name'=>'required',
        ]);

        $tipeberkas = TipeBerkas::findOrFail($id);
        $tipeberkas->tb_name = $request->input('tb_name');
        $tipeberkas->save();

        return redirect()->route('tipeberkas.show', 
            $tipeberkas->tb_id)->with('flash_message', 
            'Tipe Berkas, '. $tipeberkas->tb_name.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipeberkas = TipeBerkas::findOrFail($id);
        $tipeberkas->delete();

        return redirect()->route('tipeberkas.index')
            ->with('flash_message',
             'Tipe Berkas successfully deleted');
    }
}
