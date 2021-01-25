<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $todos = Todo::all();
        return  view('todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'text' => 'required',
            'body' => 'required',
            'due' => 'required',
        ]);
        $todo = new Todo();
        $todo->text = $request->text;
        $todo->body = $request->body;
        $todo->due = $request->due;
        $todo->save();

        session()->flash('success', 'Todo Created Successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Todo $todo
     * @return Application|Factory|View
     */
    public function show(Todo $todo)
    {
        return view('todo.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Todo $todo
     * @return string
     */
    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'text' => 'required',
            'body' => 'required',
            'due' => 'required',
        ]);
        $todo = Todo::findOrFail($id);
        $todo->text = $request->text;
        $todo->body = $request->body;
        $todo->due = $request->due;
        $todo->save();

        session()->flash('success', 'Todo Update Successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Todo $todo
     * @return string
     * @throws Exception
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        session()->flash('success', 'Todo Delete Successfully!');
        return back();
    }
}
