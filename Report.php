<?php
// Абстракция
abstract class Report {
    protected $renderer;

    public function __construct(Renderer $renderer) {
        $this->renderer = $renderer;
    }

    abstract public function generate(): string;
}
