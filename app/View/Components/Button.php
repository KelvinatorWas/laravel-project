<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $size = '';

    private array $typeSize = [
        "sm" =>'py-2 px-4',
        'md' => 'py-4 px-8',
        'lg' => 'py-8 px-16'
    ];


    /**
     * Create a new component instance.
     * @param string $label is the button text content
     * @param string $type must be one of these "default", "primary", "secondary"
     */
    public function __construct(string $size = "md")
    {
        $this->size .= $this->typeSize[$size];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.index');
    }
}
