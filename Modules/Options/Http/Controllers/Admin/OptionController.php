<?php

namespace Modules\Options\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Options\Entities\Option;
use Modules\Options\Http\Requests\CreateOptionRequest;
use Modules\Options\Http\Requests\UpdateOptionRequest;
use Modules\Options\Repositories\OptionRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Questions\Repositories\QuestionRepository;

class OptionController extends AdminBaseController
{
    /**
     * @var OptionRepository
     */
    private $option;
    /*private $listening;*/
    private $question;

    public function __construct(OptionRepository $option, QuestionRepository $question)
    {
        parent::__construct();

        $this->option = $option;
        /*$this->listening = $listening;*/
        $this->question = $question;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $options = $this->option->all();
        $questions = $this->question->all();

        return view('options::admin.options.index', compact('options', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $questions = $this->question->all();
        //dd($questions);
        return view('options::admin.options.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateOptionRequest $request
     * @return Response
     */
    public function store(CreateOptionRequest $request)
    {
        $this->option->create($request->all());

        return redirect()->route('admin.options.option.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('options::options.title.options')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Option $option
     * @return Response
     */
    public function edit(Option $option)
    {
        /*$listenings = $this->listening->all();*/
        $questions = $this->question->all();
        return view('options::admin.options.edit', compact('option', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Option $option
     * @param  UpdateOptionRequest $request
     * @return Response
     */
    public function update(Option $option, UpdateOptionRequest $request)
    {
        $this->option->update($option, $request->all());

        return redirect()->route('admin.options.option.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('options::options.title.options')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Option $option
     * @return Response
     */
    public function destroy(Option $option)
    {
        $this->option->destroy($option);

        return redirect()->route('admin.options.option.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('options::options.title.options')]));
    }
}
