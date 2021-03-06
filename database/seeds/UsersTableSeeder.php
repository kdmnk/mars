<?php

use Illuminate\Database\Seeder;
use App\User;
use App\PrintAccount;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->createAdmin();
        $this->createCollegist();
        $this->createTenant();
        
        factory(App\User::class, 10)->create()->each(function ($user) {
            factory(App\MacAddress::class, $user->id % 5)->create(['user_id' => $user->id]);
            $user->roles()->attach($this->getRoleId(Role::COLLEGIST));
            $user->roles()->attach($this->getRoleId(Role::INTERNET_USER));
        });
    }

    private function createAdmin() {
        $user = User::create([
            'name' => 'Hapák József',
            'email' => 'root@eotvos.elte.hu',
            'password' => bcrypt('asdasdasd'),
            'verified' => true
        ]);
        factory(App\MacAddress::class, 3)->create(['user_id' => $user->id]);
        $user->roles()->attach($this->getRoleId(Role::PRINT_ADMIN));
        $user->roles()->attach($this->getRoleId(Role::INTERNET_ADMIN));
    }

    private function createCollegist() {
        $user = User::create([
            'name' => 'Éliás Próféta',
            'email' => 'collegist@eotvos.elte.hu',
            'password' => bcrypt('asdasdasd'),
            'verified' => true
        ]);
        $user->roles()->attach($this->getRoleId(Role::COLLEGIST));
        $user->roles()->attach($this->getRoleId(Role::PRINTER));
        $user->roles()->attach($this->getRoleId(Role::INTERNET_USER));
    }

    private function createTenant() {
        $user = User::create([
            'name' => 'A külföldi srác',
            'email' => 'tenant@eotvos.elte.hu',
            'password' => bcrypt('asdasdasd'),
            'verified' => true
        ]);
        $user->roles()->attach($this->getRoleId(Role::TENANT));
        $user->roles()->attach($this->getRoleId(Role::INTERNET_USER));
    }

    private function getRoleId(string $roleName) {
        return Role::where('name', $roleName)->first()->id;
    }
}
