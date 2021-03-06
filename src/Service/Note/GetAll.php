<?php

declare(strict_types=1);

namespace App\Service\Note;

final class GetAll extends BaseNoteService
{
    public function getAll(): array
    {
        return $this->noteRepository->getNotes();
    }
}
