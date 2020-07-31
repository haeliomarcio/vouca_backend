<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNews;
use App\Models\News;
use Illuminate\Http\Request;
use Exception;

class NewsController extends Controller
{

    protected $model;
    public function __construct(News $model) {
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
                ->orWhere('introduction', 'ilike', "%{$search}%")
                ->paginate(10);
        } else {
            $context = $this->model->paginate(10);
        }
        return view('news.list', ['list' => $context]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNews $request)
    {
        try {
            $params = $request->all();
            $params['image_path'] = $params['image'];
            $data = $this->model->create($params);
            $request->file('image')->store('site');
            return redirect('/dashboard/news/list')->with('success', 'Artigo criado com sucesso.');
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
        return view('news.edit', ['data' => $context]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNews $request, $id)
    {
        $context = $this->model->find($id);
        $context->update($request);
        return redirect('/dashboard/news')->with('success', 'Artigo atualizado com sucesso.');
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
                ->with('success', 'Artigo '. $context->name. ' removido com sucesso');
            }
        }
        return back()
            ->with('error', 'Erro ao remover notícia');
        
    }
}
