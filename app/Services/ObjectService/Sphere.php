<?php
namespace App\Services\ObjectService;

class Sphere extends GenericObject {
    public function __construct() {
        parent::__construct();
        $this->structure();
    }

    public function generate() {
        $props = $this->getProps();

        return "<a-sphere {$props}></a-sphere>";
    }
}