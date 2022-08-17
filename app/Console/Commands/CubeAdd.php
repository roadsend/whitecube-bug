<?php

namespace App\Console\Commands;

use App\Models\Cube;
use Illuminate\Console\Command;

class CubeAdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Cube:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $attributes['body'] = 'Informative Body';
        $attributes['link'] = 'https://www.leadmarvels.com';
        $attributes['title'] = 'Creative Title';
        $attributes['caption'] = 'remarkable caption';
        $sections['key'] = 'vn8QliHwvCAZ5kCF';
        $sections['layout'] = 'text-with-image';
        $sections['attributes'] = $attributes;
        $data = '[' . json_encode($sections) . ']';

        Cube::factory()
            ->create(['sections' => $data]);
    }
}
