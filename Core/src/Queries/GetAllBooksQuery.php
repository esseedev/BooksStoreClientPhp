<?php
declare(strict_types=1);

namespace Queries;

use BooksStoreSettings;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final readonly class GetAllBooksQuery
{
    public function __construct(
        private readonly HttpClientInterface $client,
        private readonly BooksStoreSettings $settings,
        
    ) { }
    public function execute() {
        $response = $this->client->request('GET', $this->settings->buildUrl($this->settings::BOOKS_PATH), [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer {${$this->settings->token}}"
            ],
        ]);
        
        return $response->toArray();
    }
}