<?php

//namespace Bot\Controllers;

/**
 * Class Process
 *
 * @package Bot\Controllers
 */
class Process
{
    /**
     *
     *
     * @author György Baszarab <baszarab@nexus-netsoft.com>
     * @param $NXS_TYPE_HINT $keyword $keyword
     * @return mixed
     */
    public function processKeywords($keyword)
    {
        $keywords = new Keywords();
        $words = $keywords->getKeywords();
        $answer = new Answer();
        $messages = $answer->getMessages();
        $message = 'No keyword found';
        $key = array_search($keyword, $words);
        if (isset($messages[$key]))
        {
            $message = $messages[$key];
        }

        return $message;
    }
}