<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'test User',
        //     'email' => 'test@example.com',
        // ]);
        //name //email // password
        $userAdm = \App\Models\User::factory()->create([
            'name' => 'usuário administrador',
            'cpf' => '12345678910',
            'email' => 'adm@gmail.com',
            'password' => 'ipi123',
            'role' => 'adm'
        ]);
        \App\Models\UsersAdm::factory()->create([
            'users_id' => $userAdm->id
        ]);
        $userStudying = \App\Models\User::factory()->create([
            'name' => 'usuário estudante',
            'cpf' => '12345678911',
            'email' => 'student@gmail.com',
            'password' => 'ipi123',
            'role' => 'student'
        ]);
        \App\Models\UsersStudying::factory()->create([
            'users_id' => $userStudying->id
        ]);
        //cpf phone phoneIsWhatsApp genre course
        $userGraduates1 = \App\Models\User::factory()->create([
            'name' => 'usuário egresso',
            'cpf' => '12345678912',
            'email' => 'graduate@gmail.com',
            'password' => 'ipi123',
            'role' => 'graduate'
        ]);
        \App\Models\UsersGraduates::factory()->create([
            'users_id' => $userGraduates1->id,
            'phone' => '81994139948',
            'phoneIsWhatsApp' => true,
            'genre' => 'Masculino',
            'course' => 'IPI'
        ]);
        $userGraduates2 = \App\Models\User::factory()->create([
            'name' => 'usuário egresso2',
            'cpf' => '12345678913',
            'email' => 'graduate2@gmail.com',
            'password' => 'ipi123',
            'role' => 'graduate'
        ]);
        \App\Models\UsersGraduates::factory()->create([
            'users_id' => $userGraduates2->id,
            'phone' => '82994139948',
            'phoneIsWhatsApp' => true,
            'genre' => 'Masculino',
            'course' => 'IPI'
        ]);
    }
}