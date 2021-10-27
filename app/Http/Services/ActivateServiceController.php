<?php

namespace App\Http\Services;

class ActivateServiceController {

    public $attributes = [];

    public function address(array $data) {
        $this->attributes = $data;
    }

    public function student(array $data) {
        $this->attributes = $data;
    }

    public function employee(array $data) {
        $this->attributes = $data;
    }

    public function user(array $data) {
        $this->attributes = $data;
    }
}