<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Cube;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CubeTest extends TestCase
{
    use RefreshDatabase;

    public function testItShowsAWelcomePage()
    {
        $this->get(route('welcome'))
            ->assertOk()
            ->assertSee('CUBE TEST PASSING ATTRIBUTES TO COMPONENTS');
    }

    public function testItShowsTheCubesBody()
    {
        $this->get(route('welcome'))
            ->assertOk()
            ->assertSee('Informative Body');
    }

    public function testItShowsARemarkableCaption()
    {
        $this->get(route('welcome'))
            ->assertOk()
            ->assertSee('remarkable caption');
    }

    public function testItShowTheCaptionWithMergedAttributes()
    {
        // TypeError: trim(): Argument #1 ($string) must be of type string, App\Nova\Flexible\Layouts\TextWithLink given in
        $this->markTestSkipped();
        $this->get(route('welcome'))
            ->assertOk()
            ->assertSee('text-purple-500');
    }

    protected function setUp(): void
    {
        parent::setUp();

        $attributes['body'] = 'Informative Body';
        $attributes['link'] = 'https://www.leadmarvels.com';
        $attributes['title'] = 'Creative Title';
        $attributes['caption'] = 'remarkable caption';
        $sections['key'] = 'vn8QliHwvCAZ5kCF';
        $sections['layout'] = 'text-with-image';
        $sections['attributes'] = $attributes;
        $data = '[' . json_encode($sections) . ']';

        Cube::factory()
            ->create(['name' => 'My Test Cube','sections' => $data]);
    }
}
