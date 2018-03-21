<?php namespace Backend\Classes;

/**
 * Report Widget base class
 * Report widgets are used inside the ReportContainer.
 *
 *
 *
 */
class ReportWidgetBase extends WidgetBase
{
    use \System\Traits\PropertyContainer;

    public function __construct($controller, $properties = [])
    {
        $this->properties = $this->validateProperties($properties);

        parent::__construct($controller);
    }
}
