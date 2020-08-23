<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStore;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class StoresController extends Controller
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
            $context = $this->model
                ->orWhere('id', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->paginate(10);
        } else {
            $context = $this->model->paginate(10);
        }
        return view('stores.list', ['stores' => $context]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        return view('stores.new', ['states' => $states, 'brands' => Brand::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStore $request)
    {
        $this->model->create($request->all());
        return redirect('/dashboard/stores')->with('success', 'Loja criado com sucesso.');
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
        $context = DB::table('store as sto')
            ->select('sto.*', 'state.id as state_id')
            ->join('city', 'city.id', 'sto.city_id')
            ->join('state', 'state.id', 'city.state_id')
            ->where('sto.id', $id)
            ->get()->first();
        $states = State::all();
        return view('stores.edit', ['data' => $context, 'states' => $states, 'brands' => Brand::all()]);
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
        $context->update($request->all());
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
