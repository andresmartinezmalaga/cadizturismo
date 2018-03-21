<?php namespace October\Rain\Parse;

/**
 * Helper class for passing partially parsed Markdown input
 * to and from the markdown.beforeParse and markdown.parse
 * event handlers
 *
 * \support
 *
 */
class MarkdownData
{
    /**
     * @var string
     */
    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }
}