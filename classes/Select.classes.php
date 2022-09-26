<?php

class Select extends BaseInput
{

    /**
     * @var array $options
     */

    private $options = [];

    public function addOption(string $title = 'option', string $value = '') 
    {
        $this->options[] = array('title' => $title, 'value' => $value);
    }

    public function deleteOption(string $value, string $title = '') {
        $options = $this->options;
        $this->options = [];

        foreach($options as $option) {
            if($option['value'] == $value || $option['title'] == $title) {
                continue;
            }
            $this->options[] = $option;
        }
    }

    public function renderInput(): string
    {
        $select = '';

        foreach($this->options as $option) {
            $select .= sprintf("<option value='%s'>%s</option>", $option['value'], $option['title']);
        }

        return sprintf('<select name="%s">%s</select>', $this->name, $select);
    }

}