<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 19/11/2017
 * Time: 18:36
 */


use Greenter\XMLSecLibs\Sunat\SignedXml;

require 'vendor/autoload.php';

$xmlPath = __DIR__ . '/Resources/RHE1048004835615.xml';

$xmlTool = new SignedXml();

$res = $xmlTool->verifyXml(file_get_contents($xmlPath));

var_dump($res);