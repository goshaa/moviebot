<?php

/**
 * Class Answer
 */
class Answer
{
    /**
     * @var array
     */
    private $messages = array(
        1 => 'test1',
        2 => 'test2'
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