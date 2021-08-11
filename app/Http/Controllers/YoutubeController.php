<?php

/**
 * Growth Engineering Youtube Test
 * OpenAPI declarations for Growth Engineering youtube test
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: hello@oguzozcan.com
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use GrowthEngineering\YoutubeTestServer\models\PlaylistInfo;
use GrowthEngineering\YoutubeTestServer\models\PlaylistResponse;
use GrowthEngineering\YoutubeTestServer\models\VideoInfo;
use GrowthEngineering\YoutubeTestServer\models\VideoThumbnail;
use GrowthEngineering\YoutubeTestServer\models\VideoThumbnails;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class YoutubeController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation getPlaylist
     *
     * Get - List Playlist.
     *
     * @param string $playlistId Id of playlist (required)
     *
     * @return Application|ResponseFactory|Response response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getPlaylist($playlistId)
    {
        $lastVideoId = \request("last_video_id");

        //path params validation
        if (strlen($playlistId) > 36) {
            throw new \InvalidArgumentException('invalid length for $playlistId when calling YoutubeController.getPlaylist, must be smaller than or equal to 36.');
        }

        if (strlen($playlistId) < 16) {
            throw new \InvalidArgumentException('invalid length for $playlistId when calling YoutubeController.getPlaylist, must be bigger than or equal to 16.');
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $playlistId)) {
            throw new \InvalidArgumentException('invalid value for $playlistId when calling YoutubeController.getPlaylist, must conform to the pattern /^[a-zA-Z0-9]+$/.');
        }

        $query = [
            "part" => "snippet,contentDetails,status",
            "maxResults" => 30,
            "playlistId" => $playlistId,
            "key" => env("YOUTUBE_API_KEY")
        ];

        if($lastVideoId) {
            $query["pageToken"] = $lastVideoId;
        }

        $res = Http::get(
            "https://www.googleapis.com/youtube/v3/playlistItems",
            $query
        );

        if($res->serverError() || $res->status() == 404) {
            return Response($res->json(), $res->status());
        }

        $response = new PlaylistResponse();
        $playlistInfo = new PlaylistInfo();
        $videos = [];

        $playlistObj = $res->object();
        $videoIds = [];

        foreach($playlistObj->items as $playlistItem) {
            $videoIds[] = $playlistItem->contentDetails->videoId;
        }

        $videosQuery = [
            "part" => "snippet,contentDetails,statistics",
            "maxResults" => 30,
            "id" => implode(',', $videoIds),
            "key" => env("YOUTUBE_API_KEY")
        ];

        $videosResponse = Http::get(
            "https://www.googleapis.com/youtube/v3/videos",
            $videosQuery
        );

        if($videosResponse->serverError() || $videosResponse->status() == 404) {
            return Response($res->json(), $videosResponse->status());
        }

        $videosObj = $videosResponse->object();

        $playlistInfo->setNextPageToken($playlistObj->nextPageToken);
        $response->setPlaylistInfo($playlistInfo);

        foreach ($videosObj->items as $videoItem) {
            $video = new VideoInfo();

            $video->setChannelId($videoItem->snippet->channelId);
            $video->setDescription($videoItem->snippet->description);
            $video->setTitle($videoItem->snippet->title);
            $video->setPublishedAt($videoItem->snippet->publishedAt);
            $video->setVideoId($videoItem->id);
            $video->setLikeCount($videoItem->statistics->likeCount);
            $video->setDislikeCount($videoItem->statistics->dislikeCount);
            $video->setViewCount($videoItem->statistics->viewCount);

            $thumbnails = new VideoThumbnails();

            if(isset($videoItem->snippet->thumbnails->default)) {
                $targetThumb = $videoItem->snippet->thumbnails->default;
                $thumbnail = new VideoThumbnail();

                $thumbnail->setUrl($targetThumb->url);
                $thumbnail->setWidth($targetThumb->width);
                $thumbnail->setHeight($targetThumb->height);
                $thumbnails->setDefault($thumbnail);
            }

            if(isset($videoItem->snippet->thumbnails->medium)) {
                $targetThumb = $videoItem->snippet->thumbnails->medium;
                $thumbnail = new VideoThumbnail();

                $thumbnail->setUrl($targetThumb->url);
                $thumbnail->setWidth($targetThumb->width);
                $thumbnail->setHeight($targetThumb->height);
                $thumbnails->setMedium($thumbnail);
            }

            if(isset($videoItem->snippet->thumbnails->high)) {
                $targetThumb = $videoItem->snippet->thumbnails->high;
                $thumbnail = new VideoThumbnail();

                $thumbnail->setUrl($targetThumb->url);
                $thumbnail->setWidth($targetThumb->width);
                $thumbnail->setHeight($targetThumb->height);
                $thumbnails->setHigh($thumbnail);
            }

            if(isset($videoItem->snippet->thumbnails->standard)) {
                $targetThumb = $videoItem->snippet->thumbnails->standard;
                $thumbnail = new VideoThumbnail();

                $thumbnail->setUrl($targetThumb->url);
                $thumbnail->setWidth($targetThumb->width);
                $thumbnail->setHeight($targetThumb->height);
                $thumbnails->setStandard($thumbnail);
            }

            if(isset($videoItem->snippet->thumbnails->maxres)) {
                $targetThumb = $videoItem->snippet->thumbnails->maxres;
                $thumbnail = new VideoThumbnail();

                $thumbnail->setUrl($targetThumb->url);
                $thumbnail->setWidth($targetThumb->width);
                $thumbnail->setHeight($targetThumb->height);
                $thumbnails->setMaxres($thumbnail);
            }

            $video->setThumbnails($thumbnails);

            $videos[] = $video;
        }

        $response->setVideoInfo($videos);

        return Response(json_encode($response));
    }
}
