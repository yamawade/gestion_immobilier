<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Bien;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BienTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testStoreBien()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    
        Storage::fake('public');

        $image = UploadedFile::fake()->image('test_image.png');
    
        $response = $this->post('/ajoutBien-traitement', [
                'nom' => 'Article Test',
                'categorie' => 'luxe',
                'adresse' => 'Adresse Test',
                'user_id' => $user->id,
                'description' => 'Description Test',
                'dimension_bien' => 100,
                'statut' => 'disponible',
                'espace_vert' => 'indisponible',
                'nombre_balcon'=>2,
                'nombre_toilette'=>3,
                'nombre_chambre'=>5,
                'image'=>$image
            ]);

            $response->assertStatus(302);
    }

    public function testlisterBien()
    {
        $biens = Bien::all();
        $response = $this->get('/dashboardUser');
        $response->assertStatus(302);

    }

    
    public function testsupprimerBien(){
        $biens = Bien::FindOrFail(1);
        $response = $this->get('/biens/delete/'.$biens->id);
        $response->assertStatus(302);
    }
}
