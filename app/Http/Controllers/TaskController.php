<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\News;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Auth::user()->tasks;
        $new_tasks = [];
        $in_progress_tasks = [];
        $finished_tasks = [];

        foreach ($tasks as $task) {
            if ($task->percentage == 0) {
                $new_tasks[] = $task;
            } elseif ($task->percentage > 0 && $task->percentage < 100) {
                $in_progress_tasks[] = $task;
            } elseif ($task->percentage == 100) {
                $finished_tasks[] = $task;
            }
        }
        return view('user.tasks.all-tasks', compact('new_tasks','in_progress_tasks', 'finished_tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.tasks.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'nullable|boolean',
            'percentage' => 'nullable|integer|min:0|max:100',
            'startTask' => 'nullable|date',
            'end_task' => 'nullable|date|after_or_equal:startTask',
        ]);

        $task = Auth::user()->tasks()->create($request->all());
        return redirect()->route('task.index')->with('success_update', 'task updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::query()->where('user_id',Auth::id())->where('id', $id)->firstOrFail();
        return view('user.tasks.details',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'nullable|boolean',
            'percentage' => 'nullable|integer|min:0|max:100',
            'startTask' => 'nullable|date',
            'end_task' => 'nullable|date|after_or_equal:startTask',
        ]);
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return redirect()->route('task.index')->with('success_update', 'task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::query()->where('user_id',Auth::id())->where('id', $id)->firstOrFail();
        $task->delete();
        return redirect()->route('task.index')->with(['success_delete' => __('comon.deleting_successfully')]);
    }
    public function todayTasks()
    {
        $today = Carbon::today();
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)
            ->whereDate('start_task', $today)
            ->get();

        return view('user.tasks.today_tasks', compact('tasks'));
    }
}
