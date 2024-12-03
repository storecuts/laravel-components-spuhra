<?php

namespace StoreCuts\LaravelComponentsSpuhra\Components;

use Illuminate\View\Component;

class InputText extends Component
{
    public string $name;
    public string $value;
    public string $placeholder;

    public function __construct(string $name, string $value = '', string $placeholder = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('storecuts-components::components.input-text');
    }
}
