<?php

abstract class BaseInput extends HtmlElement
{

    protected string $name;
    protected string $label;
    protected string $value;

    /**
     *  BaseInput constructor.
     * 
     * @param string $name
     * @param string $label
     * @param string $value
     */

    public function __construct($name, $label, $value = '')
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }

    abstract public function renderInput(): string;

    public function render(): string
    {
        return sprintf('<div>
                <label>%s</label><br />
                %s
            </div>', $this->label, $this->renderInput());
    }

}