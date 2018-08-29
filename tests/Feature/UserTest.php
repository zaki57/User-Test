<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{

    public $data_array = [
        'name' => 'random',
        'age' => '18',
        'email' => 'random@email.com',
        'username' => 'abc',
        'status' => '1',
        'level_id' => '3'
    ];

    public $id = 1;

    protected function setUp()
    {
        parent::setUp();

        $user = factory(User::class)->create();


        $this->actingAs($user, 'api');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testUserAll()
    {
        $response = $this->json('GET', 'api/users/');
        $response->assertStatus('200');
    }

    public function testUserCreation()
    {
        $response = $this->json('POST', 'api/users', $this->data_array);
        $response->assertStatus('200');
    }

    public function testUserUpdation()
    {

        $response = $this->json('PUT', 'api/users', $this->data_array);
        $response->assertStatus('200');

    }

    public function testUserShow()
    {
        $response = $this->json('GET', 'api/users/'.$this->id);
        $response->assertStatus('200');
    }

    public function testUserDeletion()
    {

        $response = $this->json('DELETE', 'api/users');
        $response->assertStatus('200');

    }

}
