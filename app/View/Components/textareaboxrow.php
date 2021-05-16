<?php

namespace App\View\Components;

use Illuminate\View\Component;

class textareaboxrow extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $label;
    public $hint;
    public function __construct($name,$label = NULL,$hint = NULL)
    {
        $this->name = $name;
        $this->label = $label;
        $this->hint = $hint;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.textareaboxrow');
    }
}
