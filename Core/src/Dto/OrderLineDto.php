<?php
declare(strict_types=1);
namespace Bookstore;

final readonly class OrderLineDto
{
    public function __construct(
        public int $bookId,
        public int $quantity
    ) {}
}