<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNews;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    protected $model;
    protected $prefixName = 'news';

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
            $context = $this->model->where('title', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->orWhere('introduction', 'like', "%{$search}%")
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
    public function store(StoreNews $request)
    {
        try {
            $params = $request->all();
            $filename = $request->file('image')->store('', 'site');
            $params['image_path'] = $filename;
            $params['slug_title'] = Str::slug($params['title']);
            if(empty($params['publish'])) {
                $params['publish'] = Carbon::now()->format('Y-m-d');
            }
            $this->model->create($params);
            return redirect('/dashboard/'.$this->prefixName)->with('success', 'Artigo criado com sucesso.');
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
    public function update(StoreNews $request, $id)
    {
        $context = $this->model->find($id);
        $params = $request->all();
        $params['slug_title'] = Str::slug($params['title']);
        if($request->file('image')) {
            if(file_exists(public_path('files/'.$context->image_path))) {
                unlink(public_path('files/'.$context->image_path));
            }
            $filename = $request->file('image')->store('', 'site');
            $params['image_path'] = $filename;
        }
        $context->update($params);
        return redirect('/dashboard/'.$this->prefixName)->with('success', 'Artigo atualizado com sucesso.');
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
                Storage::disk('site')->delete($context->path_image);
                return back()
                ->with('success', 'Artigo '. $context->name. ' removido com sucesso');
            }
        }
        return back()
            ->with('error', 'Erro ao remover notícia');
    }
}
