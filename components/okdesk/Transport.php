<?php
namespace app\components\okdesk;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class Transport
{
    private $httpClient;
    private $baseUri = "https://vekas.okdesk.ru/api/v1/";
    private $apiToken = "248d5831d8ca1709731f53e6b0111709769bd8e4";

    public function __construct()
    {
        $this->httpClient = new Client(['verify' => false]);
    }

    public function getIssuesIds($params = []): array
    {
        return $this->getRequest("issues/count", $params);
    }

    public function getIssuesDetail($issueId): array
    {
        return $this->getRequest("issues/$issueId", []);
    }

    public function getCompanies($params = []): array
    {
        return $this->getRequest("companies/list", $params);
    }

    private function getRequest($uri, $params)
    {
        $params["api_token"] = $this->apiToken;

        $response = $this->httpClient->get($this->baseUri.$uri, [
            RequestOptions::QUERY => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}