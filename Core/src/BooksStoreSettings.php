<?php

final readonly class BooksStoreSettings
{
    public function __construct(
        public string $apiBaseUrl,
        public string $token,
    ) {}
    public const BOOKS_PATH = "api/books";
    public const ORDERS_PATH = "api/orders";

    public function buildUrl(string $path): string {
        return $this->apiBaseUrl . $path;
    }
}