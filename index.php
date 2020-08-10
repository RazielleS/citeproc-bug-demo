<?php
require __DIR__ . '/vendor/autoload.php';

$stylesheet = file_get_contents('vendor/citation-style-language/styles-distribution/harvard-cite-them-right.csl');
$json = json_decode(file_get_contents('demo.json'));

$citeProc = new \Seboettg\CiteProc\CiteProc($stylesheet);
echo $citeProc->render($json);