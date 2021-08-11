<?php
/**
 * PlaylistInfo
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * PlaylistInfo
 */
class PlaylistInfo {

    /** @var int $totalRecords */
    public int $totalRecords;

    /** @var int $resultsPerPage */
    public int $resultsPerPage;

    /** @var string $prevPageToken */
    public string $prevPageToken;

    /** @var string $nextPageToken */
    public string $nextPageToken;

    /**
     * @return int
     */
    public function getTotalRecords(): int
    {
        return $this->totalRecords;
    }

    /**
     * @param int $totalRecords
     */
    public function setTotalRecords(int $totalRecords): void
    {
        $this->totalRecords = $totalRecords;
    }

    /**
     * @return int
     */
    public function getResultsPerPage(): int
    {
        return $this->resultsPerPage;
    }

    /**
     * @param int $resultsPerPage
     */
    public function setResultsPerPage(int $resultsPerPage): void
    {
        $this->resultsPerPage = $resultsPerPage;
    }

    /**
     * @return string
     */
    public function getPrevPageToken(): string
    {
        return $this->prevPageToken;
    }

    /**
     * @param string $prevPageToken
     */
    public function setPrevPageToken(string $prevPageToken): void
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return string
     */
    public function getNextPageToken(): string
    {
        return $this->nextPageToken;
    }

    /**
     * @param string $nextPageToken
     */
    public function setNextPageToken(string $nextPageToken): void
    {
        $this->nextPageToken = $nextPageToken;
    }

}
