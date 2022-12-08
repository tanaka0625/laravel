<?php

namespace App\View\Components;

use Illuminate\View\Component;

class message extends Component
{
    // キャメルケースじゃないとダメ！！
    public $msgTitle;
    public $msgContent;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($msgTitle, $msgContent)
    {
        $this->msgTitle = $msgTitle;
        $this->msgContent = $msgContent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.message');
    }
}
