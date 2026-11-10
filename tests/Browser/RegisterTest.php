<?php

it(
    'registers a user',
    function () {
        visit('/register')
            ->fill('name', 'John Doe')
            ->fill('email', 'john@example.com')
            ->fill('password', 'password@123')
            ->click('Create Account')
            ->assertPathIs('/');

       
        $this->assertAuthenticated();
    }

);
