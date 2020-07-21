<?php

/**
 * Class BaseInput
 */
abstract class BaseInput extends HtmlElement
{
    public string $label;
    public string $name;
    public string $value;

    /**
     * BaseInput constructor.
     *
     * @param string $name
     * @param string $label
     * @param string $value
     */
    public function __construct(string $name, string $label = '', string $value = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function render(): string
    {
        return sprintf('<div>
            <label>%s</label><br>
            %s
            </div>', $this->label, $this->renderInput());
    }

    abstract public function renderInput(): string;
}