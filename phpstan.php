<?php

return [
    'parameters' => [
        'parallel' => [
            'maximumNumberOfProcesses' => max((int)getenv('PROCESSES'), 1),
            'minimumNumberOfJobsPerProcess' => max((int)getenv('PROCESSES'), 1),
        ],
    ],
];
