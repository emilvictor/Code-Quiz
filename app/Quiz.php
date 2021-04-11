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
                    ],
                    [
                        'id' => 3,
                        'question' => 'is this the THIRD javascript q?',
                    ],
                    [
                        'id' => 4,
                        'question' => 'is this the FOURTH javascript q?',
                    ],
                    [
                        'id' => 5,
                        'question' => 'is this the FIFTH AND LAST javascript q?',
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
                        'answer' => [
                            ['yes' => true],
                            ['maybe' => false],
                            ['no' => false],
                        ]
                    ],
                    [
                        'id' => 3,
                        'answer' => [
                            ['yes' => true],
                            ['maybe' => false],
                            ['no' => false],
                        ]
                    ],
                    [
                        'id' => 4,
                        'answer' => [
                            ['yes' => true],
                            ['HAHAHAHA' => false],
                            ['no' => false],
                        ]
                    ],
                    [
                        'id' => 5,
                        'answer' => [
                            ['yes' => true],
                            ['maybe' => false],
                            ['no' => false],
                        ]
                    ],

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
