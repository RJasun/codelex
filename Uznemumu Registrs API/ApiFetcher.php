<?php
class ApiFetcher
{
    private string $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function fetchData(string $resourceId, string $query): array
    {
        $url = "{$this->getBaseUrl()}?q={$query}&resource_id={$resourceId}";

        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}