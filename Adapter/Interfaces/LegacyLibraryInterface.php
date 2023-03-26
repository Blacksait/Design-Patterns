<?php

namespace Adapter\Interfaces;

interface LegacyLibraryInterface
{
    public function findMedia($file);
    public function uploadMedia($file);
}