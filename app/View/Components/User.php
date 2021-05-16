<?php

namespace App\View\Components;

use Illuminate\View\Component;

class User extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $email;
    public function __construct($email)
    {
        //
        $data = \App\Models\User::query()->where('email','=',$email)->get() ?? false;
        if($data === false){
            return false;
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user',['data' => $data]);
    }
}
