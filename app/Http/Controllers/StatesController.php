<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;

class StatesController extends Controller
{
    protected $model;
    public function __construct(State $model) {
        $this->model = $model;
    }

    public function listCity($state_id) {
        $list = City::where('state_id', $state_id)->get();
        return response()->json($list, 200);
    }
}
