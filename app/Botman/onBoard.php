<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;

class onBoard extends Conversation
{
    protected $name;
    protected $sanitasi;



    public function askName()
    {
        $this->ask('Hi! What is your name?', function(Answer $answer) {
            // Save result
            $this->name = $answer->getText();

            $this->say('Nice to meet you '.$this->name);
            $this->askSanitasi();
        });
    }

    public function askSanitasi()
    {
        $this->ask('Hi! e?', function(Answer $answer) {
            // Save result
            $this->sanitasi = $answer->getText();

            $this->say('sanitasi '.$this->sanitasi);
            $this->run();
        });
    }
    public function run()
    {
        // This will be called immediately
        $this->askName();
    }
}