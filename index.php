<?php
require_once 'Report.php';
require_once 'Renderer.php';
require_once 'SalesReport.php';

$renderer = $_GET['format'] === 'json' ? new JSONRenderer() : new HTMLRenderer();
$data = [
    "Product A" => 150,
    "Product B" => 200,
    "Product C" => 50,
];
$report = new SalesReport($renderer, "Sales Report", $data);

echo $report->generate();
