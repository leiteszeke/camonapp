<?php
namespace App\Services\ObjectService;

class Cone extends GenericObject {
    public function __construct() {
        parent::__construct();
        $this->structure();
    }

    public function generate() {
        $props = $this->getProps();

        return "<a-cone {$props}></a-cone>";
    }
}