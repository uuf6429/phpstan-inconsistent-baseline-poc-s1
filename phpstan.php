<?php

return [
    'parameters' => [
        'parallel' => [
            'jobSize' => 1,
            'maximumNumberOfProcesses' => max((int)getenv('PROCESSES'), 1),
            'minimumNumberOfJobsPerProcess' => 1,
        ],
    ],
];
