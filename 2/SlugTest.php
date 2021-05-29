<?php

use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase
{

  public function test_reder(){

    require "app/Slug.php";

    $slug = new Slug("Cursos de Laravel");

    $this->assertEquals($slug->render(), "cursos-de-laravel");

  }
   
}
