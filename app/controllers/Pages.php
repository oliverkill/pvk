<?php


class Pages extends Controller
{

    public function __construct()
    {
    }

    public function index(){
        $data = array('title' => 'Pages');
        $this->view('pages/index', $data);
    }
}