<?php

namespace Adapter\Classes;

use Adapter\Interfaces\LegacyLibraryInterface;

class LegacyLibrary implements LegacyLibraryInterface
{

    public function findMedia($file)
    {
        return base64_encode($file);
    }

    public function uploadMedia($file)
    {
        return "{$file} - upload";
    }
}