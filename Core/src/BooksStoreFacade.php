<?php
declare(strict_types=1);

use Commands\PostBooksCommand;
use Commands\PostBooksCommandHandler;
use Queries\GetAllBooksQuery;
use Queries\GetAllOrdersQuery;

final readonly class BooksStoreFacade
{
    function __construct(
        private GetAllBooksQuery $getAllBooksQuery,
        private GetAllOrdersQuery $getAllOrdersQuery,
        private PostBooksCommandHandler $postBooksCommandHandler
    ) { }
    
    public function getBooks(): array {
        return $this->getAllBooksQuery->execute();
    }
    
    public function getOrders(): array {
        return $this->getAllOrdersQuery->execute();
    }
    
    public function postBooks(array $newBooks): void {
        $command = new PostBooksCommand($newBooks);
        $this->postBooksCommandHandler->handle($command);
    }
}