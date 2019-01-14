<?php
namespace App\Services\ObjectService;

class Circle extends GenericObject {
    public function __construct() {
        parent::__construct();
        $this->structure();
    }

    public function generate() {
        $props = $this->getProps();

        return "<a-circle {$props}></a-circle>";
    }
}