<?php
namespace GrowthEngineering\YoutubeTestServer\models;

class InlineResponse200 {
    /** @var string $kind */
    public string $kind;

    /** @var string $etag */
    public string $etag;

    /** @var string $nextPageToken */
    public string $nextPageToken;

    /** @var PlaylistItem[] $items */
    public array $items;

    /** @var \GrowthEngineering\YoutubeTestServer\models\PageInfo $pageInfo */
    public PageInfo $pageInfo;
}
