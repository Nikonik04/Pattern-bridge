<?php
// Интерфейс для реализации
interface Renderer {
    public function renderHeader(string $title): string;
    public function renderBody(array $data): string;
    public function renderFooter(): string;
}

// Реализация в формате HTML
class HTMLRenderer implements Renderer {
    public function renderHeader(string $title): string {
        return "<h1>$title</h1>";
    }

    public function renderBody(array $data): string {
        $body = "<ul>";
        foreach ($data as $key => $value) {
            $body .= "<li><strong>$key:</strong> $value</li>";
        }
        $body .= "</ul>";
        return $body;
    }

    public function renderFooter(): string {
        return "<footer>© 2024 Company</footer>";
    }
}

// Реализация в формате JSON
class JSONRenderer implements Renderer {
    public function renderHeader(string $title): string {
        return json_encode(["header" => $title]);
    }

    public function renderBody(array $data): string {
        return json_encode(["body" => $data]);
    }

    public function renderFooter(): string {
        return json_encode(["footer" => "© 2024 Company"]);
    }
}
