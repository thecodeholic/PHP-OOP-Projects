<?php

/**
 * Class Button
 *
 */
class Button extends HtmlElement
{
    public string $text;
    public string $type;

    /**
     * Button constructor.
     *
     * @param string $text
     * @param string $type
     */
    public function __construct(string $text, string $type = 'button')
    {
        $this->text = $text;
        $this->type = $type;
    }

    public function render(): string
    {
        return sprintf('<button type="%s">%s</button>', $this->type, $this->text);
    }
}