<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Cube as CubeModel;
use Illuminate\Contracts\View\View;

class Cube extends Component
{
    public $cube;

    public function __construct()
    {
        $this->cube = CubeModel::first();
    }

    public function render(): View
    {
        return view('components.cube');
    }
}
