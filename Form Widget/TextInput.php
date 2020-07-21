<?php
/**
 * Class TextInput
 */
class TextInput extends BaseInput
{

    public function renderInput(): string
    {
        return sprintf('<input type="text" name="%s" value="%s"/>', $this->name, $this->value);
    }
}