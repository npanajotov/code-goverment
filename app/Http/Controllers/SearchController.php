<?php

namespace App\Http\Controllers;

use Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    private $client;

    /**
     * SearchController constructor.
     */
    public function __construct()
    {
        $this->client = ClientBuilder::create()->build();;
    }


    public function search(Request $request)
    {
        $params = [
            'index' => 'ingest_index',
            'type' => 'attachment',
            'body' => [
                'query' => [
                    'match' => [
                        'attachment.content' => $request->input('q'),
                    ]
                ],
            ],
        ];
        $response = $this->client->search($params);
        return response()->json($response['hits']['hits']);
    }

    public function createMapping()
    {
        $params = [
            'id' => 'attachment',
            'body' => [
                'description' => 'eUprava indeksiranje dokumenata',
                'processors' => [
                    [
                        'attachment' => [
                            'field' => 'textField',
                            'indexed_chars' => -1
                        ],
                    ],
                ],
            ],
        ];
        $this->client->ingest()->putPipeline($params);
    }

    public function indexDocuments()
    {
        $file = '/tmp/ime.txt';
        $title = 'Ime fajla';
        $params['body'][] = [
            'index' => [
                '_index' => 'ingest_index',
                '_type' => 'attachment',
                '_id' => 'demo',
                'pipeline' => 'attachment',
            ]
        ];

        $data = base64_encode(file_get_contents($file));

        $params['body'][] = [
            'title' => $title,
            'textField' => $data,
            'file_path' =>$file,
        ];
        $this->client->bulk($params);
    }
}
