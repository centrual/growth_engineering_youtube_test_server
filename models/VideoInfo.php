<?php
/**
 * VideoInfo
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * VideoInfo
 */
class VideoInfo {

    /** @var string $videoId */
    public string $videoId;

    /** @var int $viewCount */
    public int $viewCount;

    /** @var int $likeCount */
    public int $likeCount;

    /** @var int $dislikeCount */
    public int $dislikeCount;

    /** @var string $publishedAt */
    public string $publishedAt;

    /** @var string $channelId */
    public string $channelId;

    /** @var string $title */
    public string $title;

    /** @var string $description */
    public string $description;

    /** @var \GrowthEngineering\YoutubeTestServer\models\VideoThumbnails $thumbnails */
    public VideoThumbnails $thumbnails;

    /**
     * @return string
     */
    public function getVideoId(): string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     */
    public function setVideoId(string $videoId): void
    {
        $this->videoId = $videoId;
    }

    /**
     * @return int
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * @param int $viewCount
     */
    public function setViewCount(int $viewCount): void
    {
        $this->viewCount = $viewCount;
    }

    /**
     * @return int
     */
    public function getLikeCount(): int
    {
        return $this->likeCount;
    }

    /**
     * @param int $likeCount
     */
    public function setLikeCount(int $likeCount): void
    {
        $this->likeCount = $likeCount;
    }

    /**
     * @return int
     */
    public function getDislikeCount(): int
    {
        return $this->dislikeCount;
    }

    /**
     * @param int $dislikeCount
     */
    public function setDislikeCount(int $dislikeCount): void
    {
        $this->dislikeCount = $dislikeCount;
    }

    /**
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->publishedAt;
    }

    /**
     * @param string $publishedAt
     */
    public function setPublishedAt(string $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return string
     */
    public function getChannelId(): string
    {
        return $this->channelId;
    }

    /**
     * @param string $channelId
     */
    public function setChannelId(string $channelId): void
    {
        $this->channelId = $channelId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return VideoThumbnails
     */
    public function getThumbnails(): VideoThumbnails
    {
        return $this->thumbnails;
    }

    /**
     * @param VideoThumbnails $thumbnails
     */
    public function setThumbnails(VideoThumbnails $thumbnails): void
    {
        $this->thumbnails = $thumbnails;
    }

}
