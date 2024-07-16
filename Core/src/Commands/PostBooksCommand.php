<?php
declare(strict_types=1);

namespace Commands;

use Bookstore\BookDto;
use InvalidArgumentException;

final readonly class PostBooksCommand
{
   public function __construct(
       public array $newBooks
   ) {
       $this->validateNewBooks($this->newBooks);
   }
   
   private function validateNewBooks(array $newBooks): void {
       if (empty($newBooks)) {
           throw new InvalidArgumentException("newBooks cannot be empty");
       }
       
       foreach ($newBooks as $book) {
           if (!$book instanceof BookDto) {
               throw new InvalidArgumentException("All elements in newBooks must be instances of BookDto");
           }
       }
   }
}