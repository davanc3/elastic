<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/local/php_interface/vendor/autoload.php");

// use Elasticsearch\ClientBuilder;

// // создаём клиент библиотеки elasticsearch для выполнения запросов
// $client = ClientBuilder::create()
//     ->setHosts(['localhost:9200']) // указываем, в виде массива, хост и порт сервера elasticsearch
//     ->build();

// $data = $client->search([
//     'index' => 'users', // название индекса (аналогия в MySQL - название БД)
//     'type' => 'user', // название типа (аналогия в MySQL - название таблицы)
//     'body' => [
//         'query' => [
//             'match' => [
//                 'site' => 'dev02.swamiart.hb-dev.ru' // выполняем среди документов данного типа, у которых поле site равно dev02.swamiart.hb-dev.ru
//             ]
//         ]
//     ]
// ]);

// echo '<pre>', print_r($data, true), '</pre>';

// die();