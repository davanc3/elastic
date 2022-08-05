<?php

namespace Elastic\Handlers;

use Elasticsearch\ClientBuilder;
use Elasticsearch\Client;

class ElasticHandler
{
    /**
     * @var Client $client Клиент, работающий с идексами ElasticSearch
     */
    private Client $client;

    __construct()
    {
        $client = ClientBuilder::build()
            ->setHosts(['localhost:9200'])

    }

    public static function    
}
