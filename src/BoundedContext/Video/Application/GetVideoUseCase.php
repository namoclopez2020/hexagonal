<?php

declare(strict_types=1);

namespace Src\BoundedContext\Video\Application;

use Src\BoundedContext\Video\Domain\Contracts\VideoRepositoryContract;

final class GetVideoUseCase
{
    private $repository;

    public function __construct(VideoRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $videoId)
    {
        $id = $videoId;

        $video = $this->repository->find($id);

        return $video;
    }
}
