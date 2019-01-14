<?php
namespace App\Services\ObjectService;

class Box extends GenericObject {
    public function __construct() {
        parent::__construct();
        $this->structure();
    }

    public function generate() {
        $props = $this->getProps();

        return "<a-box {$props}></a-box>";
    }
}