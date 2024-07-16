<?php
declare(strict_types=1);
namespace Bookstore;
final readonly class BookDto
{
    public function __construct(
        public int $id,
        public string $title,
        public int $price,
        public int $bookstand,
        public int $shelf,
        public array $authors
    ) {}
}