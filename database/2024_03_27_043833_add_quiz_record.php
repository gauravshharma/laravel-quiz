<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddQuizRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('quiz')->insert([
            'question_text' => 'Who is the author of the Harry Potter book series?',
            'option_a' => 'J.K. Rowling',
            'option_b' => 'Stephen King',
            'option_c' => 'Roald Dahl',
            'option_d' => 'Jane Austen',
            'correct_option' => 'A', // Assuming 'A' corresponds to 'J.K. Rowling'
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // You may add logic to remove the added record, but typically
        // this is not necessary as data migrations are usually one-way.
    }
}
