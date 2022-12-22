<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItem extends Component
{

    public $target;
    public $title;
    public function __construct($target, $title)
    {
        $this->target = $target;
        $this->title = $title;
    }


    public function render()
    {
        return view('components.nav-item');
    }
}
