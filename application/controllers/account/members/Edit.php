<?php

require_once(__DIR__ . '/Members.php');

class Edit extends Members
{
    /**
     * @return void
     */
    public function index()
    {
        echo $this->user_id;
    }
}
