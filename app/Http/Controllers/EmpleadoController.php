<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Pasantia;
use App\Models\Responsable;
use App\Models\Titulo;
use App\Models\Farmacia;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('empleado.index')
		->with('empleados', Empleado::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('empleado.create.create')
		->with('farmacias', Farmacia::all());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function add(Request $request)
	{
/*		$empleado = new Empleado();
		$empleado->ci = $request->ci;
		$empleado->id_farmacia = $request->farmacia;
		$empleado->nombre = $request->nombre;
		$empleado->apellido = $request->apellido;
		$empleado->edad = $request->edad;
		$empleado->cargo = $request->cargo;
		$empleado->telefono = $request->telefono;

		return $request->all();*/

		Empleado::create([
			'ci' => $request->ci,
			'id_farmacia' => $request->farmacia,
			'nombre' => $request->nombre,
			'apellido' => $request->apellido,
			'edad' => $request->edad,
			'cargo' => $request->cargo,
			'telefono' => $request->telefono,

		]);

		if($request->cargo == "pasante") {
			$request->minoria_edad == "1" ? $minoria = true : $minoria = false;
			$request->activo == "1" ? $activo = true : $activo = false;

			Pasantia::create([
				'ci' => $request->ci,
				'institucion' => $request->institucion,
				'especialidad' => $request->especialidad,
				'f_inicio' => $request->f_inicio,
				'n_permiso' => $request->n_permiso, 
				'minoria_edad' => $minoria,
				'activo' => $activo
			]);

			Responsable::create([
				'ci' => $request->ci,
				'ci_representante' => $request->ci_r,
				'nombre' => $request->nombre_r,
				'apellido' => $request->apellido_r,
				'telefono' => $request->telefono_r
			]);
		}

		if($request->cargo == "farmaceutico") {
			Titulo::create([
				'ci' => $request->ci, 
				'universidad' => $request->universidad,
				'fecha' => $request->fecha,
				'n_registro' => $request->n_registro,
				'p_sanitario' => $request->p_sanitario,
				'n_colegiatura' => $request->n_colegiatura
			]);
		}

		return redirect('empleado');
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
		//
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
