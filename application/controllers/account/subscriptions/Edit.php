<?php

require_once(__DIR__ . '/Subscriptions.php');

class Edit extends Subscriptions
{
    /**
     * @return void
     */
    public function index()
    {
        echo $this->user_id;
    }
}
