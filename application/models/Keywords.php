<?php

/**
 * Class Keywords
 */
class Keywords
{
    /**
     * @var array
     */
    private $words = array('list' => 1, 'movies' => 2);

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