<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Henry Macha',
               'email'=>'hmacha@gmail.com',
                'role'=>'0',
               'password'=> bcrypt('123456789'),
            ],
            [
               'name'=>'Masuku Chabs',
               'email'=>'mchabs@lgmail.com',
                'role'=>'1',
               'password'=> bcrypt('147852369'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}