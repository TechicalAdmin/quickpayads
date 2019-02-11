<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $freePlan = new \App\Plan();
        $freePlan->type = 'free';
        $freePlan->rate = 0;
        $freePlan->save();

        $bronzePlan = new \App\Plan();
        $bronzePlan->type = 'bronze';
        $bronzePlan->rate = 0.018;
        $bronzePlan->save();

        $silverPlan = new \App\Plan();
        $silverPlan->type = 'silver';
        $silverPlan->rate = 0.038 ;
        $silverPlan->save();

        $goldPlan = new \App\Plan();
        $goldPlan->type = 'gold';
        $goldPlan->rate = 0.07;
        $goldPlan->save();
    }
}
