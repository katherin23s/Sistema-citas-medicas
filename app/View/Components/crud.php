<?php

namespace App\View\Components;

use Illuminate\View\Component;

class crud extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $citas;
    public $i;
    public function __construct($citas, $i)
    {
        $this->citas = $citas;
        $this->i = $i;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.crud');
    }
}