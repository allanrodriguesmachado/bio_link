<?php

use App\Models\User;

describe('Auth::attempt() Functionality', function () {

    // Teste para um login bem-sucedido
    test('a user can log in with valid credentials', function () {
        // 1. Arrange: Crie um usuário no banco de dados.
        // O `User::factory()->create()` já hashea a senha para você.
        $user = User::factory()->create([
            'email'    => 'test@example.com',
            'password' => bcrypt('password'), // Senha clara para teste
        ]);


        // 2. Act: Faça uma requisição POST para a rota de login
        // simulando o envio do formulário.
        $response = $this->post('/login', [
            'email'    => 'test@example.com',
            'password' => 'password',
        ]);

        // 3. Assert: Verifique as expectativas.

        // O usuário deve ser redirecionado (geralmente para o /home ou dashboard).
        $response->assertRedirect('/home'); // Ou a rota que você usa após o login

        // O usuário deve estar autenticado.
        $this->assertAuthenticatedAs($user);

        // O status HTTP deve ser 302 (redirecionamento)
        $response->assertStatus(302);
    });

//    // Teste para login com senha incorreta
//    test('a user cannot log in with invalid password', function () {
//        // 1. Arrange: Crie um usuário válido
//        User::factory()->create([
//            'email'    => 'test@example.com',
//            'password' => bcrypt('password123'),
//        ]);
//
//        // 2. Act: Tente logar com a senha incorreta
//        $response = $this->post('/login', [
//            'email'    => 'test@example.com',
//            'password' => 'wrong-password', // Senha errada
//        ]);
//
//        // 3. Assert: Verifique as expectativas.
//
//        // O usuário não deve ser redirecionado (ou deve ser redirecionado de volta ao formulário).
//        $response->assertSessionHasErrors('email'); // O Laravel geralmente adiciona um erro na sessão.
//        $response->assertRedirect('/'); // Ou a rota do formulário de login
//
//        // Ninguém deve estar autenticado.
//        $this->assertGuest();
//
//        // O status HTTP ainda é 302 (redirecionamento), mas sem autenticar
//        $response->assertStatus(302);
//    });
//
//    // Teste para login com e-mail não registrado
//    test('a user cannot log in with unregistered email', function () {
//        // 1. Arrange: Não crie nenhum usuário para este e-mail.
//
//        // 2. Act: Tente logar com um e-mail que não existe no banco de dados
//        $response = $this->post('/login', [
//            'email'    => 'nonexistent@example.com',
//            'password' => 'anypassword',
//        ]);
//
//        // 3. Assert: Verifique as expectativas.
//
//        // Deve haver erros de sessão e redirecionamento de volta.
//        $response->assertSessionHasErrors('email');
//        $response->assertRedirect('/');
//
//        // Ninguém deve estar autenticado.
//        $this->assertGuest();
//
//        // O status HTTP ainda é 302 (redirecionamento)
//        $response->assertStatus(302);
//    });
});
