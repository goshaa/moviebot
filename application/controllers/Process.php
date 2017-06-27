<?php

namespace Bot\Controllers;

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

        if (isset($words[$keyword]))
        {
            $message = $messages[$words[$keyword]];
        }
        return $message;
    }
}