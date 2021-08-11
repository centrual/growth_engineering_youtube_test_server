<?php
/**
 * InlineResponse403
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * InlineResponse403
 */
class InlineResponse403 {

    /** @var \GrowthEngineering\YoutubeTestServer\models\Error $error */
    public Error $error;

    /**
     * @return Error
     */
    public function getError(): Error
    {
        return $this->error;
    }

    /**
     * @param Error $error
     */
    public function setError(Error $error): void
    {
        $this->error = $error;
    }

}
