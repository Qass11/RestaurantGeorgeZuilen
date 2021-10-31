<?php

namespace App\Http\Services;

class ActivateServiceController {

    public $attributes = [];

    public function address(array $data) {
        $this->attributes = $data;
        return $this->attributes;
    }

    public function student(array $data) {
        $this->attributes = $data;
        return $this->attributes;
    }

    public function employee(array $data) {
        $this->attributes = $data;
        return $this->attributes;
    }

    public function user(array $data) {
        $this->attributes = $data;
        return $this->attributes;
    }
}