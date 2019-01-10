<?php

namespace Modules\Choose\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Choose\Entities\Choose;
use Modules\Choose\Http\Requests\CreateChooseRequest;
use Modules\Choose\Http\Requests\UpdateChooseRequest;
use Modules\Choose\Repositories\ChooseRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Questions\Repositories\QuestionRepository;

class ChooseController extends AdminBaseController
{
    /**
     * @var ChooseRepository
     */
    private $choose;
    private $question;

    public function __construct(ChooseRepository $choose, QuestionRepository $question)
    {
        parent::__construct();

        $this->choose = $choose;
        $this->question = $question;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $chooses = $this->choose->all();

        return view('choose::admin.chooses.index', compact('chooses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $questions = $this->question->all();
        return view('choose::admin.chooses.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateChooseRequest $request
     * @return Response
     */
    public function store(CreateChooseRequest $request)
    {
        $this->choose->create($request->all());

        return redirect()->route('admin.choose.choose.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('choose::chooses.title.chooses')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Choose $choose
     * @return Response
     */
    public function edit(Choose $choose)
    {
        $questions = $this->question->all();
        return view('choose::admin.chooses.edit', compact('choose', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Choose $choose
     * @param  UpdateChooseRequest $request
     * @return Response
     */
    public function update(Choose $choose, UpdateChooseRequest $request)
    {
        $this->choose->update($choose, $request->all());

        return redirect()->route('admin.choose.choose.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('choose::chooses.title.chooses')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Choose $choose
     * @return Response
     */
    public function destroy(Choose $choose)
    {
        $this->choose->destroy($choose);

        return redirect()->route('admin.choose.choose.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('choose::chooses.title.chooses')]));
    }
}
