<?php

use Illuminate\Database\Seeder;
use App\Shipments;

class ShipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        for($i=1;$i<=10;$i++)
        {
            $shipment =new Shipments([ 
                'user_id'=>1,  
                'waybill'=>$faker->company,
                'customer_name'=>$faker->name,
                'customer_address'=>$faker->address,
                'customer_phone'=>$faker->phoneNumber,
            ]);
            $shipment->save();
        }
    }
}
