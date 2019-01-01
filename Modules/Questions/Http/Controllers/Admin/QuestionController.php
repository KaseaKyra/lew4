<?php

namespace Modules\Questions\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Questions\Entities\Question;
use Modules\Questions\Http\Requests\CreateQuestionRequest;
use Modules\Questions\Http\Requests\UpdateQuestionRequest;
use Modules\Questions\Repositories\QuestionRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class QuestionController extends AdminBaseController
{
    /**
     * @var QuestionRepository
     */
    private $question;
    private $listening;

    public function __construct(QuestionRepository $question, ListeningRepository $listening)
    {
        parent::__construct();

        $this->question = $question;
        $this->listening = $listening;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $questions = $this->question->all();
        $listenings = $this->listening->all();

        return view('questions::admin.questions.index', compact('questions', 'listenings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $listenings = $this->listening->all();
        
        return view('questions::admin.questions.create', compact('listenings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateQuestionRequest $request
     * @return Response
     */
    public function store(CreateQuestionRequest $request)
    {
        $this->question->create($request->all());

        return redirect()->route('admin.questions.question.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('questions::questions.title.questions')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Question $question
     * @return Response
     */
    public function edit(Question $question)
    {
        $listenings = $this->listening->all();
        return view('questions::admin.questions.edit', compact('question', 'listenings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Question $question
     * @param  UpdateQuestionRequest $request
     * @return Response
     */
    public function update(Question $question, UpdateQuestionRequest $request)
    {
        $this->question->update($question, $request->all());

        return redirect()->route('admin.questions.question.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('questions::questions.title.questions')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Question $question
     * @return Response
     */
    public function destroy(Question $question)
    {
        $this->question->destroy($question);

        return redirect()->route('admin.questions.question.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('questions::questions.title.questions')]));
    }
}
