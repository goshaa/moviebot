<?php

//namespace Bot\Models;

/**
 * Class Answer
 */
class Answer
{
    /**
     * @var array
     */
    private $messages = array(
        'test1',
        'test2'
    );

    /**
     *
     *
     * @author György Baszarab <baszarab@nexus-netsoft.com>
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }
}