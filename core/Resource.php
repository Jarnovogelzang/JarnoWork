<?php

  interface Resource {
    public function index(array $data);
    public function store(array $data);
    public function edit(array $data);
    public function show(array $data);
    public function update(array $data);
    public function delete(array $data);
  }