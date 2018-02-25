<?php

use Greenter\XMLSecLibs\Sunat\SignedXml;

require 'vendor/autoload.php';

$xmlPath = __DIR__ . '/Resources/RHE1048004835615.xml';

$xmlTool = new SignedXml();
$xmlTool->setCertificateFromFile(__DIR__.'/Resources/cert.pem');

$signed = $xmlTool->signXml(file_get_contents(__DIR__.'/Resources/20000000001-01-F001-123.xml'));

file_put_contents('20000000001-01-F001-123.xml', $signed);