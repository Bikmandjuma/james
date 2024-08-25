<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Option;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Course::insert([
            [
                'id' => 4,
                'course_name' => 'Java',
                'description' => 'Java is robustic and powerfull programming language',
            ]
        ]);

        //exam
        Exam::insert([
            [
                'id' => 4,
                'course_id' => 4,
                'exam_name' => 'Exam of Hibernate ?',
                'total_marks' => 100,
            ]
        ]);

        //exam
        Question::insert([
            [
                'id' => 32,
                'exam_id' => 4,
                'question_text' => 'What is Hibernate in Java?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ]
        ]);
            // Insert options individually
            $options = [
                [
                    'id' => 81,
                    'question_id' => 32,
                    'option_text' => 'A database management system',
                    'is_correct' => 'false',
                ],
                [
                    'id' => 82,
                    'question_id' => 32,
                    'option_text' => 'A Java framework for building web applications',
                    'is_correct' => 'false',
                ],
                [
                    'id' => 83,
                    'question_id' => 32,
                    'option_text' => 'An ORM (Object-Relational Mapping) framework',
                    'is_correct' => 'true',
                ],
                [
                    'id' => 84,
                    'question_id' => 32,
                    'option_text' => 'A Java library for handling HTTP requests',
                    'is_correct' => 'false',
                ]
            ];

            Option::insert($options);

    
    }
}
