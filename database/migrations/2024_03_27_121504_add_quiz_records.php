<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddQuizRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('quizzes')->insert([
            'question_text' => 'What is the name of the school where Harry Potter learns magic?',
            'option_a' => 'Hogwarts School of Witchcraft and Wizardry',
            'option_b' => 'Durmstrang Institute',
            'option_c' => 'Beauxbatons Academy of Magic',
            'option_d' => 'Ilvermorny School of Witchcraft and Wizardry',
            'correct_option' => 'A',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('quizzes')->insert([
            'question_text' => 'What is the name of Harry Potter`s best friend?',
            'option_a' => 'Draco Malfoy',
            'option_b' => 'Hermione Granger',
            'option_c' => 'Ron Weasley',
            'option_d' => 'Neville Longbottom',
            'correct_option' => 'C',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('quizzes')->insert([
            'question_text' => 'Which of these is not one of the Hogwarts houses?',
            'option_a' => 'Gryffindor',
            'option_b' => 'Hufflepuff',
            'option_c' => 'Slytherin',
            'option_d' => 'Ravenclaw',
            'correct_option' => 'D',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('quizzes')->insert([
            'question_text' => 'What magical creature serves as the messenger for the Hogwarts School of Witchcraft and Wizardry?',
            'option_a' => 'Thestrals',
            'option_b' => 'Owls',
            'option_c' => 'Hippogriffs',
            'option_d' => 'House-elves',
            'correct_option' => 'B',
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
