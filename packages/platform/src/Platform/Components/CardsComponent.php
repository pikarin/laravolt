<?php

namespace Laravolt\Platform\Components;

use Illuminate\View\Component;

class CardsComponent extends Component
{
    public function render()
    {
        return <<<'blade'
        <div {{ $attributes->merge(['class' => 'ui stackable cards x-cards'])}} >
            {{ $slot }}
        </div>
        blade;
    }
}
