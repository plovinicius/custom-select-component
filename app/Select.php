<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    public $containerClass;
    public $name;
    public $placeholder;
    public $id;
    public $label;
    public $selecteds;
    public $validationName;
    public $options;
    public $multiple;
    public $ref;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $containerClass = "",
        $validationName = "",
        $name = "",
        $placeholder = "Select",
        $id = "",
        $label = "",
        $selecteds = null,
        $options = [],
        $multiple = null
    )
    {
        $this->containerClass = $containerClass;
        $this->name = $name;
        $this->validationName = $validationName;
        $this->placeholder = $placeholder;
        $this->id = $id ? $id : $name;
        $this->label = $label;
        $this->selecteds = $selecteds;
        $this->options = $options;
        $this->multiple = $multiple;
        $this->ref = $this->id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        // TODO: change the path for your view component
        return view('select.component');
    }
}
