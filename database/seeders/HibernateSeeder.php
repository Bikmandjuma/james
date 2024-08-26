<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Option;

class HibernateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $course_id=5;
        $exam_id=5;
        $question_id=32;
        $option_id=85;

        Course::insert([
            [
                'id' => $course_id,
                'course_name' => 'Java programming',
                'description' => 'Java is robustic and powerfull programming language',
            ]
        ]);

        //exam
        Exam::insert([
            [
                'id' => $exam_id,
                'course_id' => $course_id,
                'exam_name' => 'Exam of Hibernate ?',
                'total_marks' => 100,
            ]
        ]);

        //exam
        Question::insert([
            [
                'id' => $question_id,
                'exam_id' => $exam_id,
                'question_text' => 'What is Hibernate in Java?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 1,
                'exam_id' => $exam_id,
                'question_text' => 'Which of the following is a core interface of Hibernate?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 2,
                'exam_id' => $exam_id,
                'question_text' => 'What is Hibernate in Java?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 3,
                'exam_id' => $exam_id,
                'question_text' => 'What is the function of the Session interface in Hibernate?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 4,
                'exam_id' => $exam_id,
                'question_text' => 'Which annotation is used to map a Java class to a database table in Hibernate?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 5,
                'exam_id' => $exam_id,
                'question_text' => 'What is the purpose of the @Id annotation in Hibernate?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 6,
                'exam_id' => $exam_id,
                'question_text' => 'What does the lazy attribute of the @OneToMany annotation control in Hibernate?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 7,
                'exam_id' => $exam_id,
                'question_text' => 'How does Hibernate handle transactions?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 8,
                'exam_id' => $exam_id,
                'question_text' => 'Which of the following is true about Hibernate Query Language (HQL)?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 9,
                'exam_id' => $exam_id,
                'question_text' => 'What is the purpose of the Criteria API in Hibernate?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ],[
                'id' => $question_id + 10,
                'exam_id' => $exam_id,
                'question_text' => 'Which of the following is a strategy for inheritance mapping in Hibernate?',
                'question_type' => 'multiple-choice',
                'marks' => '10',
            ]
        ]);
            // Insert options individually
            $options = [
                [
                    'id' => $option_id,
                    'question_id' => $question_id,
                    'option_text' => 'A database management system',
                    'is_correct' => 'false',
                ],
                [
                    'id' => $option_id + 1,
                    'question_id' => $question_id + 1,
                    'option_text' => 'A Java framework for building web applications',
                    'is_correct' => 'false',
                ],
                [
                    'id' => $option_id + 2,
                    'question_id' => $question_id + 2,
                    'option_text' => 'An ORM (Object-Relational Mapping) framework',
                    'is_correct' => 'true',
                ],
                [
                    'id' => $option_id + 3,
                    'question_id' => $question_id + 3,
                    'option_text' => 'A Java library for handling HTTP requests',
                    'is_correct' => 'false',
                ],
            ];

            Option::insert($options);
    }
}
