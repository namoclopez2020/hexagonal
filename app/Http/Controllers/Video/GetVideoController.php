<?php
declare(strict_types=1);

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetVideoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private $getVideoController;

    // public function __construct(\Src\BoundedContext\Video\Infrastructure\GetVideoController $getVideoController)
    // {
    //     $this->getVideoController = $getVideoController;
    // }

    public function __invoke(Request $request)
    {   
        $a = new \Src\BoundedContext\Video\Infrastructure\GetVideoController;
        return 'a';
        // $video = $this->getVideoController->__invoke($request);

        // return response()->json($video);
    }
}
