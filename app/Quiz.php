<?php

declare(strict_types=1);

namespace App;

use function PHPUnit\Framework\isFalse;


class Quiz
{
    public static function all(): object
    {


        $quiz = (object) [


            'javascript' =>
            [
                'questions' => [
                    [
                        'id' => 1,
                        'question' => 'is this the first javascript q?',
                    ],
                    [
                        'id' => 2,
                        'question' => 'is this the SECOND javascript q?',
                    ]
                ],
                'answers' => [
                    [
                        'id' => 1,
                        'answer' => [
                            ['yes' => true],
                            ['maybe' => false],
                            ['no' => false],
                        ]
                    ],
                    [
                        'id' => 2,
                        'question' => 'is this the SECOND javascript q?',
                    ]
                ]
            ],
            'php' =>
            [
                'questions' =>
                [
                    [
                        'id' => 1,
                        'question' => 'WHY IS THIS NEVER SHOW?',
                        'answers' => [
                            true => 'idk!',
                            'no' => false,
                            'definately no' => false,
                        ]
                    ],
                    [
                        'id' => 2,
                        'question' => 'Is this the second PHP q?',
                        'answers' => [
                            'yes' => true,
                            'no' => false,
                            'definately no' => false,
                        ]
                    ]
                ]

            ]

        ];
        return $quiz;
    }
}
