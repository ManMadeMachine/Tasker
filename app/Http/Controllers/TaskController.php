<?php

namespace App\Http\Controllers;

use App\Task;
use Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: Hae pelkästään kyseisen sisäänkirjautuneen käyttäjän taskit, ei niitä KAIKKIA..
        $user_id = Auth::user()->id;
        $tasks = Task::where('user_id', $user_id)->get();
        $tasks->toArray();

        return view('tasks.list', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();

        $task->name = $request->name;
        $task->deadline = $request->deadline;
        $task->description = $request->description;

        $task->user_id = Auth::user()->id;

        $task->save();

        return redirect('tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
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
        $task = Task::find($id);

        if ($task->name != $request->name)
        {
            $task->name = $request->name;
        }

        if ($task->deadline != $request->deadline)
        {
            $task->deadline = $request->deadline;
        }

        if ($task->description != $request->description)
        {
            $task->description = $request->description;
        }

        $task->save();

        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect('tasks');
    }
}
