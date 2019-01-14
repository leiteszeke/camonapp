<?php
namespace App\Services\ObjectService;

class Cylinder extends GenericObject {
    public function __construct() {
        parent::__construct();
        $this->structure();
    }

    public function generate() {
        $props = $this->getProps();

        return "<a-cylinder {$props}></a-cylinder>";
    }
}