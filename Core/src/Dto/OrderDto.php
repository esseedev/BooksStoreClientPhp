<?php
declare(strict_types=1);
namespace Bookstore;

final readonly class OrderDto
{
    public function __construct(
        public string $orderId,
        public array $orderLines
    ) {}
}