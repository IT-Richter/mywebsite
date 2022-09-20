<?php

namespace App\Guestbook;

use App\Core\AbstractModel;

class GuestbookEntryModel extends AbstractModel
{
    public $id;
    public $author;
    public $content;
    public $timestamp;
}