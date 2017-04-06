<?php

namespace App\Http\Controllers;

class ServiceController extends Controller {
    public function index() {
        return view('page.service');
    }

    public function show($view) {
        $data = array('view'=>$view);
        return view('page.service-detail', $data);
    }
}
