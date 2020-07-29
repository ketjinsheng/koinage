<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Verticalnav extends Component
{
    public $pageData = '';
    // public $btnCollapse = '';

    public function mount($pageName)
    {
        $this->pageData = ['pageName' => $pageName];
    }

    // public function handleCollapse()
    // {
    //     if ($this->btnCollapse == '') {
    //         $this->btnCollapse = 1;
    //     } else {
    //         $this->btnCollapse = '';
    //     }
    // }

    public function handleRedirect($btnNavbar)
    {
        return redirect()->route($btnNavbar);
    }

    public function render()
    {
        return view('livewire.component.verticalnav');
    }
}
