<?php
namespace App\Services\ObjectService;

abstract class GenericObject {
    protected $path;
    protected $file;
    protected $original;
    protected $data;

    public function __construct() {
        $this->path = storage_path() . '/app/public/objects/';
    }

    protected function structure() {
        $classPath = explode("\\", get_called_class());
        $className = strtolower(array_pop($classPath));
        $content = file_get_contents("{$this->path}{$className}.json");

        $this->original = $this->data = json_decode($content, true);
    }

    public function setValue(string $index, $value) {
        if (isset($this->data[$index])) {
            $this->data[$index] = $value;
        }
    }

    public function setValues(array $array) {
        foreach ($array as $index => $value) {
            $this->setValue($index, $value);
        }
    }

    public function get() {
        return $this->data;
    }

    public function isModified(string $index, $value) {
        return $this->original[$index] !== $value;
    }

    public function getProps() {
        $props = "";

        foreach ($this->data as $key => $value) {
            if ($this->isModified($key, $value)) {
                $props .= " {$key}=\"{$value}\"";
            }
        }

        return trim($props);
    }

    abstract protected function generate();
}