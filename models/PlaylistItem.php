<?php
/**
 * PlaylistItem
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * PlaylistItem
 */
class PlaylistItem {

    /** @var string $kind */
    private $kind;

    /** @var string $etag */
    private $etag;

    /** @var string $id */
    private $id;

    /** @var \GrowthEngineering\YoutubeTestServer\models\PlaylistItemSnippet $snippet */
    private $snippet;

    /** @var \GrowthEngineering\YoutubeTestServer\models\PlaylistItemStatus $status */
    private $status;

    /** @var \GrowthEngineering\YoutubeTestServer\models\PlaylistItemContentDetails $contentDetails */
    private $contentDetails;

}
