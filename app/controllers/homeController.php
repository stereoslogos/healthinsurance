<?php 

class homeController extends Controller {
  function __construct()
  {
    
  }

  function index()
  {
    $data =
    [
      'title' => 'Projects',
      'project' => projectModel::all_paginated(),
      'bg'    => ''
    ];

    View::render('index', $data);
  }

}