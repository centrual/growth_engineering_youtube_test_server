<?php
/**
 * VideoThumbnail
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * VideoThumbnail
 */
class VideoThumbnail {

    /** @var string $url */
    public string $url;

    /** @var int $width */
    public int $width;

    /** @var int $height */
    public int $height;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

}
