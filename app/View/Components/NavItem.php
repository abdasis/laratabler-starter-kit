<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItem extends Component
{

    public $target;
    public $title;
    public $dropdownable = false;
    public function __construct($target, $title, $dropdownable)
    {
        $this->target = $target;
        $this->title = $title;
        $this->dropdownable = $dropdownable;
    }


    public function render()
    {
        return view('components.nav-item');
    }
}
