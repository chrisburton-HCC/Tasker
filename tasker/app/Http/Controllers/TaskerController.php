<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskerController extends Controller
{
    /**
     * Display a listing of tasks
     *
     * @return \Illuminate\Http\Response
     *  */
    public function index() {
        $tasks = Task::all();
        return view('tasker.index',['tasklist'=>$tasks]);
    }

    /**
     * Create a new task
     *
     * @return \Illuminate\Http\Response
     *  */
    public function create() {
        return view('tasker.create');
    }

    /**
     * Store a newly created task
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $task = new Task();
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->target = $request->input('target');
        $task->start = $request->input('start');
        $task->finish = $request->input('finish');
        $task->save();

        return redirect()->route('task.index')->with('info','Task added.');
    }

    /**
     * Show the form for editing tasks
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $task = Task::find($id);
        return view('task.edit',['task'=>$task]);
    }

    /**
     * Update existing task
     *
     * @param \Illuminate\Http\Request $request
     * @param int $i
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $task = Task::find($request->input('id'));
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->target = $request->input('target');
        $task->start = $request->input('start');
        $task->finish = $request->input('finish');
        $task->isStarted = ($request->input('isStarted') == 'TRUE');
        $task->isFinished = ($request->input('isFinished') == 'TRUE');
        $task->save();

        return redirect()->route('task.index')->with('info','Task updated.');

    }

    /**
     * Remove the selected task
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $task = $Task::find($id);
        $task->delete();

        return redirect()->route('task.index')->with('info','Task deleted');
    }
}
