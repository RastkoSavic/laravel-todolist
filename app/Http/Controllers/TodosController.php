<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Todo Model
use App\Todo;

// Todos Controller with CRUD functions
class TodosController extends Controller
{
    /**
     * Display a listing of Todos.
     * Order by created_at, Decending
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Todos
        // $todos = Todo::all();

        // Get ordered Todos
        $todos = Todo::orderBy('created_at', 'desc')->get();
        
        // Return view with todos
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new Todo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show create Todo form
        return view('todos.create');
    }

    /**
     * Store a newly created Todo in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data
        $this->validate($request, [
            'text' => 'required'
        ]);

        // Create New Todo
        $todo = new Todo;
        $todo->text = $request->input('text');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        // Store Todo
        $todo->save();

        return redirect('/')->with('success', 'Todo Created');
    }

    /**
     * Display the specified Todo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find Todo by id
        $todo = Todo::find($id);

        // Return Todo
        return view('todos.show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified Todo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get Todo for editing
        $todo = Todo::find($id);

        // Return Todo
        return view('todos.edit')->with('todo', $todo);
    }

    /**
     * Update the specified Todo in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validate data
         $this->validate($request, [
            'text' => 'required'
        ]);

        // Find Todo
        $todo = Todo::find($id);

        // Set new values
        $todo->text = $request->input('text');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        // Update Todo
        $todo->save();

        return redirect('/')->with('success', 'Todo Updates');
    }

    /**
     * Remove the specified Todo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
