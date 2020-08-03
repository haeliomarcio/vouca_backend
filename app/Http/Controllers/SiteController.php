<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailContato;
use App\Mail\EnviaContato;
use App\Models\JobsEmployment;
use App\Models\News;
use App\Models\State;
use App\Models\Store;
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
            'stores' => Store::groupBy('id', 'name')->get(),
            'states' => State::all(),
        ]);
    }


    public function listLojas() {
        $stores = Store::all();
        return response()->json($stores, 200);
    }

    public function trabalheConosco() {
        $jobs = JobsEmployment::all();
        $states = State::all();
        return view('site.trabalhe-conosco', ['jobs' => $jobs, 'states' => $states]);
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

    public function vaga() {
        return view('site.vaga');
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
