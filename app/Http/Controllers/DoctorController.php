<?php

namespace App\Http\Controllers;
use App\Doctor;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;



class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function _construc()
      {
          $this->middleware('auth');
      }

     
    public function index()
    {
        $doctores=Doctor::orderBy('id','asc')->paginate(5);
        return view ('doctores.index',compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required',
            'especialidad'=> 'required',
            'telefono'=> 'required',
        ]);
    Doctor::create($request->all());
    return redirect()->route('doctores.index')
    ->with('success','Doctor creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
        $doctores = Doctor::all();
        $pdf = PDF::loadview('doctores.mostrar',compact('doctores'));
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctores=Doctor::find($id);
        return view ('doctores.edit',compact('doctores'));
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
        $request->validate([
            'nombre'=> 'required',
            'especialidad'=> 'required',
            'telefono'=> 'required',
          ]);
        Doctor::find($id)->update($request->all());
        return redirect()->route('doctores.index')->
        with('success','El doctor fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();
        return redirect()->route('doctores.index')->
        with('success','El doctor fue eliminado ');
    }
}
