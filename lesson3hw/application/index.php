<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 30.10.14
 * Time: 20:08
 */
require "Builder.php";
$br = $argv[1];
$bo = $argv[2];
$wi = $argv[3];
$app = new Builder();
$app->Building($br,$bo,$wi);