<?php

  class Model {
    public function belongsTo(String $model, String $foreignKey = null, String $localKey = null) {

    }

    public function hasMany(String $model, String $foreignKey = null, String $localKey = null) {

    }

    public function hasOne(String $model, String $foreignKey, String $localKey) {

    }

    public function belongsToMany(String $model, String $pivotTable = null, String $foreignKey = null, String $localKey = null) {

    }

    public function hasManyThrough(String $model, String $pivotModel, String $pivotForeignKey = null, String $foreignKey = null, String $localKey = null, String $pivotLocalKey = null) {

    }
    
    public static function create(array $data) {

    }

    public function update(array $data) {

    }

    public function delete() {

    }

    public static function getTable() {

    }

    public static function getPrimaryKey() {

    }

    public static function setTable(String $table) {
      
    }

    public static function setPrimaryKey(String $primaryKey) {

    }
  }