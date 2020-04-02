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
        $task->target = safeDate($request->input('target'));
        $task->start = null;
        $task->finish = null;
        $task->isStarted = false;
        $task->isFinished = false;
        $task->save();

        return redirect()->route('tasker.index')->with('info','Task added.');
    }

    /**
     * Show the form for editing tasks
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $task = Task::find($id);
        return view('tasker.edit',['task'=>$task]);
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
        $task->target = safeDate($request->input('target'));
        $task->start = safeDate($request->input('start'));
        $task->finish = safeDate($request->input('finish'));

        $task->isStarted = ($request->input('isStarted') == 'TRUE');
        $task->isFinished = ($request->input('isFinished') == 'TRUE');
        $task->save();

        return redirect()->route('tasker.index')->with('info','Task updated.');

    }

    /**
     * Remove the selected task
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id) {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('tasker.index')->with('info','Task deleted');
    }

    /**
     * Set the start date and isStarted boolean
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function initiate(int $id) {
        $task = Task::find($id);
        $task->isStarted = true;
        $task->start = Date('Y-m-d');
        $task->save();

        return redirect()->route('tasker.index')->with('info','Task updated.');
    }

    /**
     * Set the finish date and isFinished boolean
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function complete(int $id) {
        $task = Task::find($id);
        $task->isFinished = true;
        $task->finish = Date('Y-m-d');
        $task->save();

        return redirect()->route('tasker.index')->with('info','Task updated.');
    }
}

/**
  * If given date string converts to a real date,
  *   return date string formatted for mysql
  * else
  *   return null
  */
  function safeDate($datestring) {
    $datesecs = strtotime($datestring);
    if ($datesecs > 0) {
        return Date("Y-m-d",$datesecs);
    } else {
        return null;
    }
}

