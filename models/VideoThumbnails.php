<?php
/**
 * VideoThumbnails
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * VideoThumbnails
 */
class VideoThumbnails {

    /** @var \GrowthEngineering\YoutubeTestServer\models\VideoThumbnail $default */
    public VideoThumbnail $default;

    /** @var \GrowthEngineering\YoutubeTestServer\models\VideoThumbnail $medium */
    public VideoThumbnail $medium;

    /** @var \GrowthEngineering\YoutubeTestServer\models\VideoThumbnail $high */
    public VideoThumbnail $high;

    /** @var \GrowthEngineering\YoutubeTestServer\models\VideoThumbnail $standard */
    public VideoThumbnail $standard;

    /** @var \GrowthEngineering\YoutubeTestServer\models\VideoThumbnail $maxres */
    public VideoThumbnail $maxres;

    /**
     * @return VideoThumbnail
     */
    public function getDefault(): VideoThumbnail
    {
        return $this->default;
    }

    /**
     * @param VideoThumbnail $default
     */
    public function setDefault(VideoThumbnail $default): void
    {
        $this->default = $default;
    }

    /**
     * @return VideoThumbnail
     */
    public function getMedium(): VideoThumbnail
    {
        return $this->medium;
    }

    /**
     * @param VideoThumbnail $medium
     */
    public function setMedium(VideoThumbnail $medium): void
    {
        $this->medium = $medium;
    }

    /**
     * @return VideoThumbnail
     */
    public function getHigh(): VideoThumbnail
    {
        return $this->high;
    }

    /**
     * @param VideoThumbnail $high
     */
    public function setHigh(VideoThumbnail $high): void
    {
        $this->high = $high;
    }

    /**
     * @return VideoThumbnail
     */
    public function getStandard(): VideoThumbnail
    {
        return $this->standard;
    }

    /**
     * @param VideoThumbnail $standard
     */
    public function setStandard(VideoThumbnail $standard): void
    {
        $this->standard = $standard;
    }

    /**
     * @return VideoThumbnail
     */
    public function getMaxres(): VideoThumbnail
    {
        return $this->maxres;
    }

    /**
     * @param VideoThumbnail $maxres
     */
    public function setMaxres(VideoThumbnail $maxres): void
    {
        $this->maxres = $maxres;
    }

}
