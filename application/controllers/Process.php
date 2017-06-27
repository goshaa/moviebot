<?php

class Process
{
    public function processKeywords($keyword)
    {
        $keywords = new Keywords();
        $words = $keywords->getKeywords();
        $answer = new Answer();
        $messages = $answer->getMessages();

        if (isset($keywords[$keyword]))
        {
            $message = $messages[$keywords[$keyword]];
        }
        return $message;
    }
}