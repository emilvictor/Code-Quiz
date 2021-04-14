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
                        'question' => 'Is this a javascript q?',
                    ],
                    [
                        'id' => 2,
                        'question' => 'Is this a javascript q?',
                    ],
                    [
                        'id' => 3,
                        'question' => 'Is this a javascript q?',
                    ],
                    [
                        'id' => 4,
                        'question' => 'Is this a  javascript q?',
                    ],
                    [
                        'id' => 5,
                        'question' => 'Is this the last javascript q?',
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
                            ['yes' => false],
                            ['maybe' => false],
                            ['no' => true],
                        ]
                    ],
                    [
                        'id' => 5,
                        'answer' => [
                            ['maybe' => false],
                            ['no' => false],
                            ['yes' => true],
                        ]
                    ],

                ]
            ],


            'php' =>
            [
                'questions' => [
                    [
                        'id' => 1,
                        'question' => 'Is this a php q?',
                    ],
                    [
                        'id' => 2,
                        'question' => 'Is this a php q?',
                    ],
                    [
                        'id' => 3,
                        'question' => 'Is this a php q?',
                    ],
                    [
                        'id' => 4,
                        'question' => 'Is this a php q?',
                    ],
                    [
                        'id' => 5,
                        'question' => 'Is this the last php q?',
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
                            ['maybe' => false],
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


            'sql' =>
            [
                'questions' => [
                    [
                        'id' => 1,
                        'question' => 'Is this an sql q?',
                    ],
                    [
                        'id' => 2,
                        'question' => 'Is this an sql q?',
                    ],
                    [
                        'id' => 3,
                        'question' => 'Is this an sql q?',
                    ],
                    [
                        'id' => 4,
                        'question' => 'Is this an sql q?',
                    ],
                    [
                        'id' => 5,
                        'question' => 'Is this an sql q?',
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
                            ['maybe' => false],
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


            'laravel' =>
            [
                'questions' => [
                    [
                        'id' => 1,
                        'question' => 'Is this a laravel q?',
                    ],
                    [
                        'id' => 2,
                        'question' => 'Is this a laravel q?',
                    ],
                    [
                        'id' => 3,
                        'question' => 'Is this a laravel q?',
                    ],
                    [
                        'id' => 4,
                        'question' => 'Is this a laravel q?',
                    ],
                    [
                        'id' => 5,
                        'question' => 'Is this the last laravel q?',
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
                            ['maybe' => false],
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


        ];
        return $quiz;
    }
}
