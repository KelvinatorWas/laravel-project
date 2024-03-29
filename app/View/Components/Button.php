<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $label;
    public string $class;

    private array $typeColor = [
        "default" =>'bg-primary',
        'primary' => 'bg-primary-darker',
        'secondary' => 'bg-secondary-darker'
    ];

    private array $typeSize = [
        "sm" =>'py-2 px-4',
        'md' => 'py-4 px-8',
        'lg' => 'py-8 px-16'
    ];

    private array $hoverColor = [
        "primary" => '-lighter',
        'secondary' => '-lighter',
        'default' => ''
    ];

    public string $baseStyle = "";

    /**
     * Create a new component instance.
     * @param string $label is the button text content
     * @param string $type must be one of these "default", "primary", "secondary"
     */
    public function __construct(string $label, string $class = "", string $type = "default", string $size = "md")
    {
        $this->label = $label;
        $this->class = $class;
        
        $this->addToBaseStyle($this->getStyleColor($type));
        $this->addToBaseStyle($this->getStyleSize($size));
    }

    /**
    * Gets stuff
    * @param string $type color
    */
    private function getStyleColor(string $type)
    {
        $base  = $this->typeColor[$type];
        $finalStyleColor = "$base hover:bg-$type" . $this->hoverColor[$type];
        return $finalStyleColor;
    }

     /**
    * Gets stuff
    * @param string $size size
    */
    private function getStyleSize(string $size)
    {
        return $this->typeSize[$size];
    }

    /**
    * Gets stuff
    * @param string $style aka tailwind classes
    */
    private function addToBaseStyle(string $style)
    {
        $this->baseStyle .= " {$style}";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
