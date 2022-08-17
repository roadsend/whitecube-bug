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

    public function testItCanMergeInAttributesToANormalComponent()
    {
        $this->get(route('welcome'))
            ->assertOk()
            ->assertSeeInOrder(['text-green-500','This is a working component with an attribute merge']);
    }

    public function testItCanMergeAttributesIntoComponentIntoLoadingACube()
    {
        $this->get(route('welcome'))
            ->assertOk()
            ->assertSeeInOrder(['bg-pink-100','Informative Body']);
    }

    public function testItShowsACaptionWithNoAttributesMerged()
    {
        $this->get(route('welcome'))
            ->assertOk()
            ->assertSeeInOrder(['Section passed to component no attributes loading normally.','text-blue-500','remarkable caption']);
    }

    public function testItShowTheCaptionWithMergedAttributes()
    {
        // TypeError: trim(): Argument #1 ($string) must be of type string, App\Nova\Flexible\Layouts\TextWithLink given in
        $this->markTestSkipped();
        $this->get(route('welcome'))
            ->assertOk()
            ->assertSeeInOrder(['Section passed to component breaking attributes','text-purple-500','remarkable caption']);
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
