<?php

class Form extends htmlElement {

    public string $action;
    public string $method;

    /**
     * @var \HtmlElement[]
    */

    protected array $elements = [];

    public function __construct(string $action = '', string $method = 'GET') 
    {
        $this->action = $action;
        $this->method = $method;
    }
     
    public function addElement(HtmlElement $el)
    {
        $this->elements[] = $el;
    }

    public function render(): string
    {
        $content = implode(PHP_EOL, array_map(fn($el) => $el->render(), $this->elements));
        return sprintf('<form action="%s" method="%s">%s</form>', $this->action, $this->method, $content);
    }

}