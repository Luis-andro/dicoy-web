<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Estambres Dicoy · Index')]
class Index extends Component
{
    /** Auto-advancing carousel index (driven from blade with Alpine). */
    public array $slides = [
        ['label' => 'Pastel de fresa', 'image' => 'images/cakes/cake2.jpg'],
        ['label' => 'Pan de masa madre',        'image' => 'images/cakes/cake1.jpg'],
        ['label' => 'Tres Leches especial',     'image' => 'images/cakes/cake3.jpg'],
        ['label' => 'Red Velvet de temporada',  'image' => 'images/cakes/cake4.jpg'],
        
    ];

    public array $gallery = [
        ['label' => 'Baguette artesanal',       'image' => 'images/cakes/cake5.jpg'],
        ['label' => 'Pastel de tres leches', 'image' => 'images/cakes/cake6.jpg'],
        ['label' => 'Pan de masa madre',     'image' => 'images/cakes/cake7.jpg'],
        ['label' => 'Pan de canela',         'image' => 'images/cakes/rolls1.jpg'],
    ];

    public function render()
    {
        return view('livewire.index');
    }
}
