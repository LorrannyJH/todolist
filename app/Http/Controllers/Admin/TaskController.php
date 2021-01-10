<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        $data = [
            'tasks' => Task::where('user_id', auth()->user()->id)->get()
        ];

        return view('admin.tasks.index', compact('data'));
    }

    public function create()
    {
        return view('admin.tasks.create');
    }

    public function store(TaskRequest $request)
    {
        $dataRequest = $request->all();
        $dataRequest['user_id'] = auth()->user()->id;

        Task::create($dataRequest);

        return redirect()
            ->route('admin.tasks.index')
            ->with('msg_success', 'Tarefa criada com sucesso!');
    }

    public function edit(Task $task)
    {
        if ($task->user_id != auth()->user()->id) {
            return redirect()
                ->back()
                ->with('msg_error', 'Operação não permitida.');
        }

        return view('admin.tasks.edit', compact('task'));
    }

    public function update(TaskRequest $request, Task $task)
    {
        if ($task->user_id != auth()->user()->id) {
            return redirect()
                ->back()
                ->with('msg_error', 'Operação não permitida.');
        }

        $task->update($request->all());

        return redirect()
            ->route('admin.tasks.index')
            ->with('msg_success', 'Tarefa atualizada com sucesso!');
    }

    public function destroy(Task $task)
    {
        if ($task->user_id != auth()->user()->id) {
            return redirect()
                ->back()
                ->with('msg_error', 'Operação não permitida.');
        }

        $task->delete();

        return redirect()
            ->route('admin.tasks.index')
            ->with('msg_success', 'Tarefa deletada com sucesso!');
    }
    
}
