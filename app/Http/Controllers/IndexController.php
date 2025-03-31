<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * Стартовая страница
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     * страница с задачами
     */
    public function tasks()
    {
        $tasks = Task::get();

        return view('tasks', ['tasks' => $tasks]);
    }

    /**
     * Store a newly created resource in storage.
     * метод добавления задачи
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:8',
        ]);
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('tasks');

    }

    /**
     * Display the specified resource.
     * показать конкретную задачу
     */
    public function show(string $id)
    {
        $task = Task::find($id);

        return view('edit-form', ['task' => $task]);
    }


    /**
     * Update the specified resource in storage.
     * обновить задачу
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:8',
            'status' => 'required',
        ]);
        $task = Task::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();

        return redirect()->route('tasks');

    }

    /**
     * Remove the specified resource from storage.
     * удалить задачу
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect()->route('tasks');
    }
}
