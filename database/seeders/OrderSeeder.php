<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User; 
class OrderSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        Order::create([

            'restaurant' => 'Restaurant A',
            'product_name' => 'Chicken Burger',
            'product_image' => 'orange_cake.jpg', 
            'phone' => '+99 256 896 8855',
            'price' => 11.00,
            'status' => 'Accepted',
            'delivery_status' => 'Shipped',
            'customer_id' => $user->id, 
        ]);

        Order::create([
            'restaurant' => 'Restaurant B',
            'product_name' => 'Pizza Chicken Bake',
            'product_image' => 'shrimp-avocado-tomato-salad.webp',
            'phone' => '+99 963 852 7744',
            'price' => 50.00,
            'status' => 'Pending',
            'delivery_status' => 'Pending',
             'customer_id' => $user->id,
        ]);
        Order::create([
            'restaurant' => 'Restaurant Onti',
            'product_name' => 'Pizza ',
            'product_image' => 'orange_cake.jpg',
            'phone' => '+99 863 852 7744',
            'price' => 40.00,
            'status' => 'Pending',
            'delivery_status' => 'Pending',
             'customer_id' => $user->id,
        ]);
    

       
    }
}
