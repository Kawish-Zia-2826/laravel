<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }
    public function link($text, $target = "#") {
        return new HtmlString( '<a href="'.$target.'">'.$text.'</a>');
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // return view('components.card');

        return <<<'BLADE'
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
        <body>
            <div class="card">
                <div>
                  <?php if (isset($title)): ?>
                      <button class="btn btn-primary"><?= $title ?></button>
                  <?php endif; ?>
                </div>
                <div class="card-body">
                   <?php if (empty($slot)): ?>
                       This is the default value of slot
                   <?php else: ?>
                       <?= $slot ?>
                   <?php endif; ?>
                </div>
            </div>
        </body>
        </html>
        BLADE;
        }
        
}
