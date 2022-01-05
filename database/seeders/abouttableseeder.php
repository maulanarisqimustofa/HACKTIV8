<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\about;

class abouttableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about1 = new about;
        $about1->title = "ABOUT";
        $about1->content = "Lorem ipsum dolor ...";
        $about1->save();
    }
}
