<?php
namespace App\Guestbook;

use App\Core\AbstractRepository;

class GuestbookEntryRepository extends AbstractRepository
{

    public function getTableName(): string
    {
        return "guestbookentry";
    }

    public function getModelName(): string
    {
        return "App\\Guestbook\\GuestbookEntryModel";
    }

    public function insertguestbookEntry(string $author, string $content)
    {
        $table = $this->getTableName();
        $stmt = $this->pdo->prepare(
            "INSERT INTO `$table` (`author`,`content`, `timestamp`) VALUES (:author ,:content, :time)"
        );
        $stmt->execute([
            'author' => $author,
            'content' => $content,
            'time' => time()
        ]);
    }

}
