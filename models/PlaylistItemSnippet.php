<?php
/**
 * PlaylistItemSnippet
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * PlaylistItemSnippet
 */
class PlaylistItemSnippet {

    /** @var string $publishedAt */
    private $publishedAt;

    /** @var string $channelId */
    private $channelId;

    /** @var string $title */
    private $title;

    /** @var string $description */
    private $description;

    /** @var \GrowthEngineering\YoutubeTestServer\models\PlaylistItemThumbnails $thumbnails */
    private $thumbnails;

    /** @var string $channelTitle */
    private $channelTitle;

    /** @var string $playlistId */
    private $playlistId;

    /** @var int $position */
    private $position;

    /** @var string $videoOwnerChannelTitle */
    private $videoOwnerChannelTitle;

    /** @var string $videoOwnerChannelId */
    private $videoOwnerChannelId;

    /** @var \GrowthEngineering\YoutubeTestServer\models\PlaylistItemResourceId $resourceId */
    private $resourceId;

}
