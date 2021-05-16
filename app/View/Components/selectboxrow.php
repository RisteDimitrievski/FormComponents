<?php

namespace App\View\Components;

use Illuminate\View\Component;

class selectboxrow extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $label;
    public $hint;
    public $options;
    public $keys;
    public function __construct($name,$label = NULL,$hint = Null,$keys,$options)
    {
        $this->name = $name;
        $this->label = $label;
        $this->hint = $hint;
        $this->Keys = explode(",",$keys) ?? false;
        $this->Data = explode(",",$options) ?? false;
        $this->options = [];
        if(is_array($this->Keys) && is_array($this->Data)){
            foreach($this->Keys as $key => $val){
                foreach($this->Data as $k => $item){
                    if($k === $key){
                        $this->options["{$val}"] = "{$item}";
                    }
                }
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.selectboxrow');
    }
}
