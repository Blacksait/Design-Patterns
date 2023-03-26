<?php

namespace Facade\Classes;

class VideoFacade
{
    public function getVideo($class){
        $class->videoGood[] = (new AudioClass())->getAudio();
        $class->videoGood[] = (new VideoClass())->getVideo();
        $class->videoGood[] = (new PreviewClass())->getPreviewImg();

        return $this;
    }
}