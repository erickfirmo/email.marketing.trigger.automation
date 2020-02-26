<?php
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\Admin;
        $admin->name = 'Visitante';
        $admin->email = 'visitante@domain.br';
        $admin->foto_de_perfil = '#';
        $admin->password = bcrypt('321');
        $admin->remember_token = str_random(10);
        $admin->save();
    }
}