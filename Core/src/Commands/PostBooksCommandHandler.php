<?php
declare(strict_types=1);

namespace Commands;

use BooksStoreSettings;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final readonly class PostBooksCommandHandler
{   
    public function __construct(
        private HttpClientInterface $client,
        private BooksStoreSettings $settings,
    ) {}

    public function handle(PostBooksCommand $command): array
    {
        $response = $this->client->request('POST', $this->settings->buildUrl($this->settings::BOOKS_PATH), [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer {${$this->settings->token}}"
            ],
            'json'=> $command
        ]);
        
        return $response->toArray();
    }
}