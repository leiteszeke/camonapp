<?php
namespace App\Services\ObjectService;

class Text extends GenericObject {
    public function __construct() {
        parent::__construct();
        $this->structure();
    }

    public function generate() {
        $props = $this->getProps();

        return "<a-text {$props}></a-text>";
    }
}