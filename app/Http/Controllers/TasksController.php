<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Task::all(); 
        //$tareas = DB::table('tasks')->get();
        //return view('tareas/indexTareas', compact('tareas'));
        return view('tareas/indexTareas', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas/formTareas');
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
            'tarea'=>'required |min:5|max:225',
            'descripcion'=>'required |min:5',
            'tipo'=> 'required'

        ]);

        $tasks = new Task();
        $tasks -> tarea = $request->tarea;
        $tasks -> descripcion = $request->descripcion;
        $tasks -> tipo = $request->tipo;

        $tasks->save();

        return redirect()->route('tareas.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Task $tarea)
    {
        return view('tareas/show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $tarea)
    {
        return view('tareas/edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $tarea)
    {
        $tarea->tarea = $request->tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->tipo = $request->tipo;

        $tarea->save();

        return view('tareas/show', compact('tarea'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $tarea)
    {
        //
    }
}
