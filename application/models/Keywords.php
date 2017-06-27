<?php

//namespace Bot\Models;

/**
 * Class Keywords
 */
class Keywords
{
    /**
     * @var array
     */
    private $words = array('list', 'movies', 'hello');

    /**
     *
     *
     * @author György Baszarab <baszarab@nexus-netsoft.com>
     * @return array
     */
    public function getKeywords()
    {
        return $this->words;
    }
}