<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrands;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;


class BrandsController extends Controller
{

    protected $model;
    protected $prefixName = 'brands';

    public function __construct(Brand $model) {
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
            $context = $this->model->where('title', 'ilike', "%{$search}%")
                ->orWhere('id', 'ilike', "%{$search}%")
                ->orWhere('name', 'ilike', "%{$search}%")
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
        return view($this->prefixName.'.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrands $request)
    {
        try {
            $params = $request->all();
            $filename = $request->file('image')->store('', 'icons');
            $params['image'] = 'icons/'.$filename;
            $this->model->create($params);
            return redirect('/dashboard/'.$this->prefixName)->with('success', 'Marca criada com sucesso.');
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
    public function update(StoreBrands $request, $id)
    {
        $context = $this->model->find($id);
        $params = $request->all();
        if($request->file('image')) {
            if(file_exists(public_path('icons/'.$context->image_path))) {
                unlink(public_path('icons/'.$context->image_path));
            }
            $filename = $request->file('image')->store('', 'icons');
            $params['image'] = 'icons/'.$filename;
        }
        $context->update($params);
        return redirect('/dashboard/'.$this->prefixName)->with('success', 'Marca atualizada com sucesso.');
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
                Storage::disk('icons')->delete($context->path_image);
                return back()
                ->with('success', 'Marca '. $context->name. ' removido com sucesso');
            }
        }
        return back()
            ->with('error', 'Erro ao remover marca');
    }
}
