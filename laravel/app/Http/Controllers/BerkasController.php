<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berkas;
use Auth;
use Session;

class BerkasController extends Controller
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
        $berkas = Berkas::orderby('brks_id', 'desc')->paginate(5);
        return view('berkas.index', compact('berkas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berkas.create');
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
            'brks_name'=>'required',
            ]);

        $brks_name = $request['brks_name'];

        $berkas = Berkas::create($request->only('brks_name'));

        return redirect()->route('berkas.index')
            ->with('flash_message', 'Berkas,
             '. $berkas->brks_name.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('berkas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berkas = Berkas::findOrFail($id);

        return view('berkas.edit', compact('berkas'));
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
            'brks_name'=>'required',
        ]);

        $berkas = Berkas::findOrFail($id);
        $berkas->brks_name = $request->input('brks_name');
        $berkas->save();

        return redirect()->route('berkas.show', 
            $berkas->brks_id)->with('flash_message', 
            'Berkas, '. $berkas->brks_name.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berkas = Berkas::findOrFail($id);
        $berkas->delete();

        return redirect()->route('berkas.index')
            ->with('flash_message',
             'Berkas successfully deleted');
    }

    public function query(Request $request)
	{
		$query = $request->brks_name;
		$res = Berkas::where('brks_name', 'LIKE', "%$query%")->get();
		
		//This will only send the e-mail and avatar to avoid that users can view all the rows from selected user table
		$data = [];
		foreach($res as $key => $value ){
		    $data[$key] = [
		        'brks_name' => $value->brks_name,
		    ];
		}
		return response()->json($data);
	}
}
