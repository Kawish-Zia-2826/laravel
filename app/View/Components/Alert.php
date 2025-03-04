<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
   public $type;

   protected $types = [
    'success',
    'info',
    'danger'
   ];
   public $dismissible;
  
    public function __construct( string $type = 'info',     $dismisable = false)
    {
       
        $this->type = $type;
        $this->dismissible = $dismisable;
    }

public function validType(){
    return in_array($this->type, $this->types) ?$this->type : 'dark';
}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
