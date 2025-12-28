<?php

return [
    'parameters' => [
        'parallel' => [
            'jobSize' => 2,
            'maximumNumberOfProcesses' => max((int)getenv('PROCESSES'), 1),
            'minimumNumberOfJobsPerProcess' => max((int)getenv('PROCESSES'), 1),
        ],
    ],
];
