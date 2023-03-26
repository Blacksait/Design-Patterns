<?php
namespace Facade;

use Facade\Classes\AudioClass;
use Facade\Classes\PreviewClass;
use Facade\Classes\VideoClass;
use Facade\Classes\VideoFacade;

require_once __DIR__ . '/../vendor/autoload.php';

//Плохой вариант

class Video
{
    public array $videoBad;
    public array $videoGood;

    public function uploadBad(){
        $this->videoBad[] = (new AudioClass())->getAudio();
        $this->videoBad[] = (new VideoClass())->getVideo();
        $this->videoBad[] = (new PreviewClass())->getPreviewImg();

        return $this->send($this->videoBad);
    }

    public function uploadGood(){
        (new VideoFacade())->getVideo($this);//Вынесли подсистему компоновки видео в Фасад
        return $this->send($this->videoGood);
    }

    public function send($params){
        return "Загрузка видео - ".print_r($params,true);
    }
}

$badPractice = new Video();
$resBad = $badPractice->uploadBad();
$resGood = $badPractice->uploadGood();
print_r($resBad);
print_r($resGood);