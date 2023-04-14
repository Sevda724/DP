<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\Catalog;

class Test extends TestCase
{
    public function testRandomFilm()
    {
        $totalFilms = Catalog::count();
        $randomFilmId = Catalog::inRandomOrder()->first()->id;
        $randomFilm = Catalog::find($randomFilmId);

        $this->assertNotNull($randomFilm);
        $this->assertInstanceOf(Catalog::class, $randomFilm);
        $this->assertIsString($randomFilm->title);
        $this->assertIsString($randomFilm->description);
        $this->assertIsString($randomFilm->director);
        // ... add more assertions as needed
    }
}
