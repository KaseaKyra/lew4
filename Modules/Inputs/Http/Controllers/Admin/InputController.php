<?php

namespace Modules\Inputs\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Inputs\Entities\Input;
use Modules\Inputs\Http\Requests\CreateInputRequest;
use Modules\Inputs\Http\Requests\UpdateInputRequest;
use Modules\Inputs\Repositories\InputRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Rules\Repositories\RuleRepository;

class InputController extends AdminBaseController
{
    /**
     * @var InputRepository
     */
    private $input;
    private $rule;
    private $listening;

    public function __construct(InputRepository $input, RuleRepository $rule, ListeningRepository $listening)
    {
        parent::__construct();

        $this->input = $input;
        $this->rule = $rule;
        $this->listening = $listening;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inputs = $this->input->all();

        return view('inputs::admin.inputs.index', compact('inputs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $rules = $this->rule->all();
        return view('inputs::admin.inputs.create', compact('rules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateInputRequest $request
     * @return Response
     */
    public function store(CreateInputRequest $request)
    {
        $this->input->create($request->all());

        return redirect()->route('admin.inputs.input.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('inputs::inputs.title.inputs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Input $input
     * @return Response
     */
    public function edit(Input $input)
    {
        $rules = $this->rule->all();
        return view('inputs::admin.inputs.edit', compact('input', 'rules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Input $input
     * @param  UpdateInputRequest $request
     * @return Response
     */
    public function update(Input $input, UpdateInputRequest $request)
    {
        $this->input->update($input, $request->all());

        return redirect()->route('admin.inputs.input.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('inputs::inputs.title.inputs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Input $input
     * @return Response
     */
    public function destroy(Input $input)
    {
        $this->input->destroy($input);

        return redirect()->route('admin.inputs.input.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('inputs::inputs.title.inputs')]));
    }
}
