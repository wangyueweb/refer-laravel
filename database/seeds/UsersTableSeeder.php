<?php

use Illuminate\Support\{Str, Facades\DB};
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws Exception
     */
    public function run()
    {
        //php artisan db:seed
        DB::table('users')->insert([
            'name' => Str::random(10),
            'avatar' => 'https://gw.alipayobjects.com/zos/antfincdn/XAosXuNZyF/BiazfanxmamNRoxxVxka.png',
            'phone' => '13' . Str::random(9),
            'email' => Str::random(10).'@gmail.com',
            'signature' => Str::random(10),
            'title' => Str::random(10),
            'group' => Str::random(10),
            'notify_count' => random_int(0, 99),
            'unread_count' => random_int(0, 99),
            'country' => '中国',
            'province' => '四川省',
            'city' => '成都市',
            'district' => '天府新区',
            'address' => Str::random(5),
            'password' => bcrypt('secret'),
        ]);
    }
}
