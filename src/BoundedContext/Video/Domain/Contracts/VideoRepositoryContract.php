<?php

declare(strict_types=1);

namespace Src\BoundedContext\Video\Domain\Contracts;

interface VideoRepositoryContract
{
    public function find($id);

    // public function findByCriteria($userName, $userEmail);

    public function save($user): void;

    public function update($userId, $user): void;

    public function delete($id): void;
}
