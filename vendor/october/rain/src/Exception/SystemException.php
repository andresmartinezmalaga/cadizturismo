<?php namespace October\Rain\Exception;

use Exception;

/**
 * This class represents a critical system exception.
 * System exceptions are logged in the error log.
 *
 * \exception
 *
 */
class SystemException extends ExceptionBase
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
