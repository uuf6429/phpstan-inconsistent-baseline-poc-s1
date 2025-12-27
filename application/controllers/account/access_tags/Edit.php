<?php

require_once(__DIR__ . '/Access_tags.php');

class Edit extends Access_tags
{
    /**
     * @return void
     */
    public function index()
    {
        echo $this->user_id;
    }
}
