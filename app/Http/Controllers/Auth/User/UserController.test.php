<?php

namespace Tests\Unit\Http\Controllers\Auth\User;

use App\Http\Controllers\Auth\User\UserController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $userController;

    protected function setUp(): void
    {
        parent::setUp();
        $this->userController = $this->app->make(UserController::class);
    }
}
public function testPostLoginApiWithValidCredentials()
{
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => bcrypt('password123'),
    ]);

    $request = Request::create('/api/login', 'POST', [
        'email' => 'test@example.com',
        'password' => 'password123',
    ]);

    $response = $this->userController->postLoginApi($request);

    $this->assertEquals(200, $response->getStatusCode());
    $this->assertArrayHasKey('token', $response->getData(true));
    $this->assertEquals('Login Success', $response->getData(true)['message']);
}