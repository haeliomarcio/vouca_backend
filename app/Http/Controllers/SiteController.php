<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailContato;
use App\Mail\EnviaContato;
use App\Models\JobsEmployment;
use App\Models\News;
use App\Models\State;
use App\Models\Store;
use GuzzleHttp\Psr7\Request;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index() {
        $news = News::orderBy('id', 'desc')->get()->take(3);
        return view('site.index', ['news' => $news]);
    }

    public function sobre() {
        return view('site.sobre');
    }

    public function marcas() {
        return view('site.marcas');
    }

    public function oBoticario() {
        return view('site.o-boticario');
    }

    public function cacauShow() {
        return view('site.cacau-show');
    }

    public function arezzo() {
        return view('site.arezzo');
    }

    public function tim() {
        return view('site.tim');
    }

    public function crocs() {
        return view('site.crocs');
    }

    public function magrella() {
        return view('site.magrella');
    }

    public function lojas() {
        return view('site.lojas',
        [
            'stores' => Store::all(),
            'states' => State::all(),
        ]);
    }


    public function listLojas() {
        $params = request()->input();
        $stores = DB::table('store as sto')
            ->select('sto.*')
            ->join('city as cit', 'cit.id', 'sto.city_id')
            ->join('state as sta', 'sta.id', 'cit.state_id')
            ->when($params, function($query, $params) {
                if(isset($params['state_id']) &&  !empty($params['state_id'])) {
                    $query->where('sta.id', $params['state_id']);
                }
            })
            ->when($params, function($query, $params) {
                if(isset($params['city_id']) &&  !empty($params['city_id'])) {
                    $query->where('sto.city_id', $params['city_id']);
                }
            })
            ->when($params, function($query, $params) {
                if(isset($params['store']) &&  !empty($params['store'] && $params['store'] != 'undefined')) {
                    $query->where('sto.name', 'ilike', "{$params['store']}");
                }
            })
            ->get();
        return response()->json($stores, 200);
    }

    public function trabalheConosco() {
        $params = request()->input();
        $states = State::all();

        $jobs = DB::table('jobs_employment as job')
            ->select('job.*', 'cit.name as city_name', 'sta.name as state_name')
            ->join('city as cit', 'cit.id', 'job.city_id')
            ->join('state as sta', 'sta.id', 'cit.state_id')
            ->when($params, function($query, $params) {
                if(isset($params['state_id']) &&  !empty($params['state_id'])) {
                    $query->where('sta.id', $params['state_id']);
                }
            })
            ->when($params, function($query, $params) {
                if(isset($params['city_id']) &&  !empty($params['city_id'])) {
                    $query->where('job.city_id', $params['city_id']);
                }
            })
            ->when($params, function($query, $params) {
                if(isset($params['vaga']) &&  !empty($params['vaga'])) {
                    $query->where('job.id', $params['vaga']);
                }
            })
            ->paginate(15);
         

      
        return view('site.trabalhe-conosco', ['jobs' => $jobs, 'states' => $states]);
    }

    public function listJobs() {
        $params = request()->input();
        $states = State::all();

        $jobs = DB::table('jobs_employment as job')
            ->select('job.*', 'cit.name as city_name', 'sta.name as state_name')
            ->join('city as cit', 'cit.id', 'job.city_id')
            ->join('state as sta', 'sta.id', 'cit.state_id')
            ->when($params, function($query, $params) {
                if(isset($params['state_id']) &&  !empty($params['state_id'])) {
                    $query->where('sta.id', $params['state_id']);
                }
            })
            ->when($params, function($query, $params) {
                if(isset($params['city_id']) &&  !empty($params['city_id'])) {
                    $query->where('job.city_id', $params['city_id']);
                }
            })
            ->when($params, function($query, $params) {
                if(isset($params['vaga']) &&  !empty($params['vaga'])) {
                    $query->where('job.id', $params['vaga']);
                }
            })
            ->paginate(15);

        return response()->json(['jobs' => $jobs, 'states' => $states], 200);
    }

    public function vaga($id) {
        $job = JobsEmployment::find($id);
        return view('site.vaga', ['job' => $job]);
    }

    public function contato() {
        return view('site.contato');
    }

    public function blog() {
        return view('site.blog');
    }

    public function post() {
        return view('site.post');
    }

    public function noticias($noticia = null) {
        if(!empty($noticia)) {
            $new = News::where('slug_title', $noticia)->get()->first();
            return view('site.post', ['new' => $new]);
        } else {
            $news = News::orderBy('id', 'desc')->paginate(5);
            return view('site.blog', ['news' => $news]);
        }
    }

    public function sendEmail(EmailContato $request) {
       $email = Mail::to(new EnviaContato($request->all())) ;
       if($email) {
        return back()->with('success', 'E-mail enviado com sucesso.');
       } else {
        return back()->with('error', 'Não foi possível enviar o E-mail, por favor, tente mais tarde.');
       }
    }
}
