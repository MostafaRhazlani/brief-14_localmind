<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'content' => 'required',
        ]);

        $question = new Question();

        $question->title = $validated['title'];
        $question->location = $validated['location'];
        $question->content = $validated['content'];
        $question->user_id = auth()->guard()->user()->id;
        $question->save();

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $question = Question::find($id);
        $answers = $question->answer;

        return view('questionDetails', compact('question', 'answers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
