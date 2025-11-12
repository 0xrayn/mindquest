<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;
   
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
   
        $botman->hears('{message}', function($botman, $message) {
            $lowerMessage = strtolower($message);
            
            if ($lowerMessage == 'hai' || $lowerMessage == 'hello' || $lowerMessage == 'hi') {
                $this->askName($botman);
            } elseif (strpos($lowerMessage, 'depresi') !== false) {
                $this->startDepressionConversation($botman);
            } elseif (strpos($lowerMessage, 'bantuan') !== false) {
                $this->provideHelpResources($botman);
            } else {
                $botman->reply("Saya tidak mengerti. Cobalah mulai percakapan dengan 'hai', 'depresi', atau 'bantuan'.");
            }
        });
   
        $botman->listen();
    }
   

    
    public function askName($botman)
    {
        $botman->ask('Halo! Siapa namamu?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Senang berkenalan denganmu, ' . $name . '! Bagaimana perasaanmu hari ini?');
        });
    }

    public function startDepressionConversation($botman)
    {
        $botman->startConversation(new DepressionConversation);
    }

    public function provideHelpResources($botman)
    {
        $botman->reply('Jika kamu membutuhkan bantuan segera, hubungi layanan kesehatan mental terdekat atau hotline darurat.');
    }
}

class MoodConversation extends Conversation
{
    public function run()
    {
        $this->askMood();
    }

    public function askMood()
    {
        $this->ask('Bagaimana perasaanmu hari ini?', function(Answer $answer) {
            $mood = $answer->getText();
            if (strpos(strtolower($mood), 'baik') !== false) {
                $this->say('Senang mendengarnya! Tetap semangat ya!');
            } else {
                $this->say('Saya mengerti. Bicarakan lebih lanjut jika kamu merasa nyaman.');
                $this->bot->startConversation(new DepressionConversation);
            }
        });
    }
}

class DepressionConversation extends Conversation
{
    public function run()
    {
        $this->askSymptoms();
    }

    public function askSymptoms()
    {
        $this->ask('Apakah kamu mengalami gejala seperti merasa sedih berkepanjangan, kehilangan minat pada aktivitas sehari-hari, atau merasa putus asa?', function(Answer $answer) {
            $response = strtolower($answer->getText());
            if (strpos($response, 'ya') !== false) {
                $this->say('Maaf mendengarnya. Penting untuk mencari bantuan profesional. Saya bisa memberikan beberapa saran atau informasi jika kamu mau.');
                $this->bot->startConversation(new SuggestionConversation);
            } else {
                $this->say('Itu bagus! Jangan ragu untuk berbicara jika kamu merasa memerlukannya.');
            }
        });
    }
}

class SuggestionConversation extends Conversation
{
    public function run()
    {
        $this->offerSuggestions();
    }

    public function offerSuggestions()
    {
        $this->say('Berikut adalah beberapa langkah yang bisa membantu: ');
        $this->say('1. Berbicara dengan seseorang yang kamu percaya.');
        $this->say('2. Melibatkan diri dalam aktivitas fisik atau hobi yang kamu nikmati.');
        $this->say('3. Mencari bantuan dari profesional kesehatan mental.');
        $this->say('4. Menghubungi hotline krisis jika kamu merasa sangat tertekan.');
        $this->say('Ingat, kamu tidak sendirian dan bantuan tersedia.');
    }
}