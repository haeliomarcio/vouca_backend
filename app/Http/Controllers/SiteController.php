<?php

namespace App\Http\Controllers;

use App\Models\JobsEmployment;
use App\Models\News;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $stores = Store::all();
        return view('site.lojas', ['stores' => $stores]);
    }

    public function trabalheConosco() {
        $jobs = JobsEmployment::all();
        return view('site.trabalhe-conosco', ['jobs' => $jobs]);
    }

    public function contato() {
        return view('site.contato');
    }

    public function noticias($noticia) {
        if(!empty($noticia)) {
            $new = News::where('slug_title', $noticia)->get()->first();
            return view('site.blog', ['new' => $new]);
        } else {
            $news = News::orderBy('id', 'desc')->paginate(9);
            return view('site.blog', ['news' => $news]);
        }
        
    }

    public function sendEmail(Request $request) {
        
    }
}
