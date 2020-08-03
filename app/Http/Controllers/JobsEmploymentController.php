<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobs;
use App\Http\Requests\StoreNews;
use App\Models\JobsEmployment;
use App\Models\State;
use Illuminate\Http\Request;
use Exception;

class JobsEmploymentController extends Controller
{

    protected $model;
    protected $prefixName = 'jobs';

    public function __construct(JobsEmployment $model) {
        $this->model = $model;        
    }
    /**
     * Display a listing of the res
     * ource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $context = $this->model->where('title', 'ilike', "%{$search}%")
                ->orWhere('id', 'ilike', "%{$search}%")
                ->orWhere('introduction', 'ilike', "%{$search}%")
                ->paginate(10);
        } else {
            $context = $this->model->paginate(10);
        }
        return view($this->prefixName.'.list', ['list' => $context]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->prefixName.'.new', ['states' => State::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobs $request)
    {
        try {
            $params = $request->all();
            $this->model->create($params);
            return redirect('/dashboard/'.$this->prefixName)->with('success', 'Vaga criada com sucesso.');
        } catch(Exception $e) {
            return back()->with('error', $e->getMessage());
        }   
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
        return view($this->prefixName.'.edit', ['data' => $context]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreJobs $request, $id)
    {
        $context = $this->model->find($id);
        $params = $request->all();
        $context->update($params);
        return redirect('/dashboard/'.$this->prefixName)->with('success', 'Vaga atualizada com sucesso.');
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
                ->with('success', 'Vaga '. $context->name. ' removido com sucesso');
            }
        }
        return back()
            ->with('error', 'Erro ao remover vaga');
    }
}
