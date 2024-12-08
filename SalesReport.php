<?php
class SalesReport extends Report {
    private $title;
    private $data;

    public function __construct(Renderer $renderer, string $title, array $data) {
        parent::__construct($renderer);
        $this->title = $title;
        $this->data = $data;
    }

    public function generate(): string {
        $output = $this->renderer->renderHeader($this->title);
        $output .= $this->renderer->renderBody($this->data);
        $output .= $this->renderer->renderFooter();
        return $output;
    }
}
