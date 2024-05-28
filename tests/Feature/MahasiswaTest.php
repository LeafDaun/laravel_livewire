<?php

namespace Tests\Feature;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MahasiswaTest extends TestCase
{
    // /**
    //  * A basic feature test example.
    //  */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function testTambah()
    {
        Mahasiswa::create([
            'nama' => 'Susan Damopolii',
            'alamat' => 'Matali',
            'jurusan_id' => 2,
        ]);

        // Jurusan::create([
        //     'nama_jurusan' => 'Ekonomi Akuntasi',
        // ]);


    }
}
