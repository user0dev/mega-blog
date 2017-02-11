<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once __DIR__ . '/../vendor/autoload.php';

$request = new \Kyzimaspb\TikEngine\Http\Request();

$id = $request->get()->getInt('id');

var_dump($id);