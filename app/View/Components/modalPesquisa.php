<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalPesquisa extends Component
{
    public $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data = $this->data;
        $data = json_encode($data);
        $data = json_decode($data, true);
        view('components.modal-pesquisa')->with('data', $data);
    }
}
