<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact;

class ContactApiTest extends TestCase
{

    
    use RefreshDatabase;
 
    /**
     * Test untuk menampilkan semua kontak.
     *
     * @return void
     */
    public function test_can_list_all_contacts()
    {
        // Membuat beberapa data kontak
        Contact::factory()->count(3)->create();

        // Mengirimkan permintaan GET ke endpoint /api/contacts
        $response = $this->getJson('/api/contacts');

        // Memastikan respons memiliki status kode 200
        $response->assertStatus(200);

        // Memastikan respons berisi data kontak yang telah dibuat
        $response->assertJsonCount(3, 'data');
    }

    /**
     * Test untuk membuat kontak baru.
     *
     * @return void
     */
    public function test_can_create_contact()
    {
        // Data untuk kontak baru
        $data = [
            'Code' => '1234567890',
            'Name' => 'John Doe',
            'Email' => 'john@example.com',
            'Phone' => '123456789',
            'Mobile' => '987654321',
            'Street' => '123 Main Street',
            'City' => 'New York',
            'State' => 'NY',
            'Zip' => '10001',
            'Country' => 'USA',
            'VAT' => '1234567890',
        ];


        // Mengirimkan permintaan POST ke endpoint /api/contacts dengan data kontak baru

        $response = $this->postJson('/api/contacts', $data);

        // Memastikan respons memiliki status kode 201 (Created)
        $response->assertStatus(201);

        // Memastikan respons berisi data kontak yang telah dibuat
        $response->assertJsonFragment($data);
    }

    /**
     * Test untuk mengupdate kontak.
     *
     * @return void
     */
    public function test_can_update_contact()
    {
        // Membuat kontak baru
        $contact = Contact::factory()->create();

        // Data untuk mengupdate kontak
        $updateData = [
            'Name' => 'Updated Name',
            'Email' => 'updated_email@example.com',
            'Phone' => '987654321',
            'Mobile' => '123456789',
            'Street' => '456 Oak Street',
            'City' => 'Los Angeles',
            'State' => 'CA',
            'Zip' => '90001',
            'Country' => 'USA',
            'VAT' => '0987654321',
        ];

        // Mengirimkan permintaan PUT ke endpoint /api/contacts/{code} dengan data update
        $response = $this->putJson("/api/contacts/{$contact->id}", $updateData);

        // Memastikan respons memiliki status kode 200
        $response->assertStatus(200);

        // Memastikan respons berisi data yang telah diupdate
        $response->assertJsonFragment($updateData);
    }

    /**
     * Test untuk menghapus kontak.
     *
     * @return void
     */
    public function test_can_delete_contact()
    {
         // Membuat kontak baru
        $contact = Contact::factory()->create();

        // Mengirimkan permintaan DELETE ke endpoint /api/contacts/{code}
        $response = $this->deleteJson("/api/contacts/{$contact->id}");

        // Memastikan respons memiliki status kode 204 (No Content)
        $response->assertStatus(204);

        // Memastikan kontak telah dihapus dari database
        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }
}