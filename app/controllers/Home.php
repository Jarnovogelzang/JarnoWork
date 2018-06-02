<?php

  class Home extends Controller implements Resource {
    public function __construct() {
      parent::__construct();
    }

    public function index(array $data) {
      $this->getView('home/index')->render($data);
    }

    public function store(array $data) {

    }

    public function edit(array $data) {

    }

    public function show(array $data) {

    }

    public function update(array $data) {

    }

    public function delete(array $data) {

    }
  }