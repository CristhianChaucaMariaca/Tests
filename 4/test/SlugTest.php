<?php

use PHPUnit\Framework\TestCase;
use App\Slug;

class SlugTest extends TestCase{

  public function test_render()
  {
	$slug = new Slug("Cursos de Laravel");

	$this->assertEquals($slug->render(), "cursos-de-laravel");
  }

  public function test_render_sin_espacios()
  {
    $slug = new Slug("  Cursos de Laravel  ");

    $this->assertEquals($slug->render(), "cursos-de-laravel");
  }
}
