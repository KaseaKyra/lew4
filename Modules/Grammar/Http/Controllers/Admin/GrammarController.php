<?php

namespace Modules\Grammar\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Grammar\Entities\Grammar;
use Modules\Grammar\Http\Requests\CreateGrammarRequest;
use Modules\Grammar\Http\Requests\UpdateGrammarRequest;
use Modules\Grammar\Repositories\GrammarRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class GrammarController extends AdminBaseController
{
    /**
     * @var GrammarRepository
     */
    private $grammar;

    public function __construct(GrammarRepository $grammar)
    {
        parent::__construct();

        $this->grammar = $grammar;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $grammars = $this->grammar->all();

        return view('grammar::admin.grammars.index', compact('grammars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('grammar::admin.grammars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateGrammarRequest $request
     * @return Response
     */
    public function store(CreateGrammarRequest $request)
    {
        $this->grammar->create($request->all());

        return redirect()->route('admin.grammar.grammar.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('grammar::grammars.title.grammars')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Grammar $grammar
     * @return Response
     */
    public function edit(Grammar $grammar)
    {
        return view('grammar::admin.grammars.edit', compact('grammar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Grammar $grammar
     * @param  UpdateGrammarRequest $request
     * @return Response
     */
    public function update(Grammar $grammar, UpdateGrammarRequest $request)
    {
        $this->grammar->update($grammar, $request->all());

        return redirect()->route('admin.grammar.grammar.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('grammar::grammars.title.grammars')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Grammar $grammar
     * @return Response
     */
    public function destroy(Grammar $grammar)
    {
        $this->grammar->destroy($grammar);

        return redirect()->route('admin.grammar.grammar.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('grammar::grammars.title.grammars')]));
    }
}
