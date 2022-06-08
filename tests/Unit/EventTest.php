<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class EventTest extends TestCase
{
    public function test_success_update_event()
    {
        // $user = Sanctum::actingAs(
        //     User::factory()->create(),
        //     ['*']
        // );

        $file = UploadedFile::fake()->create('random.jpeg');
        $file->mimeType = 'image/jpeg';
        $response = $this->post('/admin/events/create', [
            'nama'=>'Monas',
            'deskripsi' => 'lorem ipsum',
            'tanggal_mulai' => date("Y-m-d"),
            'tanggal_berakhir' => date("Y-m-d"),
            'jam_buka' => '00.00 WIB',
            'jam_tutup' => '00.00 WIB',
            'lokasi' => 'Jakarta',
            'kota' => 'Jakarta',
            'harga' => 2000,
            'image_upload' => $file,
        ]);
            
        $response->assertStatus(403);
    }

    public function test_failed_update_event()
    {
        $file = UploadedFile::fake()->create('random.jpeg');
        $file->mimeType = 'image/jpeg';
        $response = $this->post('/login', [
            'nama'=>'Monas',
            'deskripsi' => 'lorem ipsum',
            'tanggal_mulai' => '2022-04-18T23:43:55.000000Z',
            'tanggal_berakhir' => '2022-04-18T23:43:55.000000Z',
            'jam_buka' => '00.00 WIB',
            'jam_tutup' => '00.00 WIB',
            'lokasi' => 'Jakarta',
            'kota' => 'Jakarta',
            'image_upload' => '',
        ]);
            
        $response->assertStatus(403);
    }
}
