<?php
/**
 * PlaylistResponse
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * PlaylistResponse
 */
class PlaylistResponse {

    /** @var \GrowthEngineering\YoutubeTestServer\models\PlaylistInfo $playlistInfo */
    public PlaylistInfo $playlistInfo;

    /** @var \GrowthEngineering\YoutubeTestServer\models\VideoInfo[] $videoInfo */
    public array $videoInfo;

    /**
     * @return VideoInfo[]
     */
    public function getVideoInfo(): array
    {
        return $this->videoInfo;
    }

    /**
     * @param VideoInfo[] $videoInfo
     */
    public function setVideoInfo(array $videoInfo): void
    {
        $this->videoInfo = $videoInfo;
    }

    /**
     * @return PlaylistInfo
     */
    public function getPlaylistInfo(): PlaylistInfo
    {
        return $this->playlistInfo;
    }

    /**
     * @param PlaylistInfo $playlistInfo
     */
    public function setPlaylistInfo(PlaylistInfo $playlistInfo): void
    {
        $this->playlistInfo = $playlistInfo;
    }

}
