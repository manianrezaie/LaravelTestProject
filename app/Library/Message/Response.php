<?php

namespace App\Library\Message;
/**
 * Created by PhpStorm.
 * User: Manian
 * Date: 5/12/2018
 * Time: 2:21 PM
 */
class Response
{

    const HTTP_OK = 200;
    const HTTP_INVALID_REQUEST = 400;
    const HTTP_NOT_FOUND = 400;
    const NOT_ACCEPTABLE = 406;

    /** @var  string $message */
    private $message;
    /** @var  integer $statusCode */
    private $statusCode;
    /** @var  boolean $success */
    private $success;

    public function __construct($message = null, $success = true, $statusCode = Response::HTTP_OK)
    {
        $this->message = $message;
        $this->success = $success;
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return  Response
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return  Response
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return  Response
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    public function getArray()
    {
        $ret = get_object_vars($this);
        if ($ret["message"] == null)
            unset($ret["message"]);

        return $ret;
    }
}