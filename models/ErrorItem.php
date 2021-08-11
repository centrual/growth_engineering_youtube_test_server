<?php
/**
 * ErrorItem
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * ErrorItem
 */
class ErrorItem {

    /** @var string $domain */
    public string $domain;

    /** @var string $reason */
    public string $reason;

    /** @var string $message */
    public string $message;

    /** @var string $locationType */
    public string $locationType;

    /** @var string $location */
    public string $location;

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getLocationType(): string
    {
        return $this->locationType;
    }

    /**
     * @param string $locationType
     */
    public function setLocationType(string $locationType): void
    {
        $this->locationType = $locationType;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

}
