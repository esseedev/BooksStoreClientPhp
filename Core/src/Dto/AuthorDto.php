<?php
declare(strict_types=1);
namespace Bookstore;

final readonly class AuthorDto
{
   public function __construct(
       public string $firstName,
       public string $lastName,
   ) {}
}