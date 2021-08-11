<?php
/**
 * Error
 */
namespace GrowthEngineering\YoutubeTestServer\models;

/**
 * Error
 */
class Error {

    /** @var int $code */
    public int $code;

    /** @var string $message */
    public string $message;

    /** @var \GrowthEngineering\YoutubeTestServer\models\ErrorItem[] $errors */
    public array $errors;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
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
     * @return ErrorItem[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param ErrorItem[] $errors
     */
    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

}
