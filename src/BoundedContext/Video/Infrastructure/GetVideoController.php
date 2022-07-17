<?php
declare(strict_types=1);

namespace Src\BoundedContext\Video\Infrastructure;

use Illuminate\Http\Request;
use Src\BoundedContext\Video\Application\GetVideoUseCase;
use Src\BoundedContext\Video\Infrastructure\Repositories\EloquentVideoRepository;

final class GetVideoController
{
    private $repository;

    public function __construct(EloquentVideoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $videoId = (int)$request->id;
        $getVideoUseCase = new GetVideoUseCase($this->repository);
        $video = $getVideoUseCase->__invoke($videoId);
    }
}