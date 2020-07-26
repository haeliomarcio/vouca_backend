<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStore;
use Illuminate\Http\Request;
use App\Models\Store;

class JobsDeploymentController extends Controller
{

    protected $model;
    public function __construct(Store $model) {
        $this->model = $model;        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $context = $this->model->where('name', 'ilike', "%{$search}%")
                ->orWhere('id', 'ilike', "%{$search}%")
                ->orWhere('email', 'ilike', "%{$search}%")
                ->paginate(10);
        } else {
            $context = $this->model->paginate(10);
        }
        return view('jobs_deployment.list', ['list' => $context]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStore $request)
    {
        $this->model->create($request);
        return redirect('stores.list')->with('success', 'Loja criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $context = $this->model->find($id);
        return view('stores.edit', ['store' => $context]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStore $request, $id)
    {
        $context = $this->model->find($id);
        $context->update($request);
        return redirect('/dashboard/stores')->with('success', 'Loja atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $context = $this->model->find($id);
        
        if($context) {
            if($context->delete()) {
                return back()
                ->with('success', 'Loja '. $context->name. ' removido com sucesso');
            }
        }
        return back()
            ->with('error', 'Erro ao remover loja');
        
    }
}
