<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Persona[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $personas =  Persona::all();
        return $personas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'dni' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'f_nac' => 'nullable',
            'fv_brevete' => 'nullable',
            'cat_brvete' => 'nullable',
            'region' => 'nullable',
            'ciudad' => 'nullable',
            'direccion' => 'nullable',
            'email' => 'nullable',
            'telefono' => 'nullable',
            'celular' => 'nullable',
            'id_empresa' => 'nullable',
            'ocupacion' => 'nullable',
            'como_llego' => 'nullable',
            'descripcion' => 'nullable',
            'id_referido' => 'nullable',
        ]);
        $persona = Persona::create($validateData);
        $persona->save();
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Persona::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'dni' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'f_nac' => 'nullable',
            'fv_brevete' => 'nullable',
            'cat_brvete' => 'nullable',
            'region' => 'nullable',
            'ciudad' => 'nullable',
            'direccion' => 'nullable',
            'email' => 'nullable',
            'telefono' => 'nullable',
            'celular' => 'nullable',
            'id_empresa' => 'nullable',
            'ocupacion' => 'nullable',
            'como_llego' => 'nullable',
            'descripcion' => 'nullable',
            'id_referido' => 'nullable',
        ]);

        $persona = Persona::find($id);
        $persona->update($validateData);
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return void
     * @throws \Exception
     */
    public function destroy($id)
    {
        $toDestroy = Persona::find($id);
        $toDestroy->delete();
        return;
    }

    /**
     * @return mixed
     */
    public function count ()
    {
        return Persona::count();
    }

    public function toExpire()
    {
        $personas = Persona::all();
        $porVencer = Collection::make([]);

        $hoy = Carbon::now();
        for ($i = 0; $i < count($personas); $i++) {
            $fv = Carbon::createFromFormat('Y-m-d', $personas[$i]->brevete->fecha_vencimiento);
            if ($fv->diffInDays($hoy) < 30) {
                $porVencer->add($personas[$i]);
            }
        }
        return $porVencer;
    }
}
