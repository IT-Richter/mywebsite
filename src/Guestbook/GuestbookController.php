<?php

namespace App\Guestbook;

use App\Core\AbstractController;

class GuestbookController extends AbstractController
{
    public $guestbookEntryRepository;

    public function __construct(GuestbookEntryRepository $guestbookEntryRepository){
        $this->guestbookEntryRepository = $guestbookEntryRepository;
    }

    public function show(){
        $message = "";
        if(!empty($_POST['content']) && (!empty($_POST['author']))){
            $message = "Kommentar erfolgreich angelegt!";
            $this->guestbookEntryRepository->insertguestbookEntry(e($_POST['author']), e($_POST['content']));
        }elseif(isset($_POST['content']) OR (isset($_POST['author']))){
            $message = "Name und Kommentar müssen ausgefüllt sein!";
        }
        $guestbookEntrys = $this->guestbookEntryRepository->all();
        $this->render('/Guestbook/Guestbook', ['guestbookEntrys' => $guestbookEntrys, 'message' => $message]);

    }
}