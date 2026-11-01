<?php

// Database operations shared by the song pages.

function deleteSong(PDO $db, int $id): void
{
    // TODO 1: Prepare and execute a DELETE for this ID.
}

function addSong(PDO $db, Song $song): void
{
    // TODO 2: Prepare and execute an INSERT using the Song object properties. Convert its boolean favorite value to 1 or 0.
}
