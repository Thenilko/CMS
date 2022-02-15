<?php

namespace App\Tools\StaticSiteGenerator;

interface StaticSiteGeneratorInterface
{
    /**
     * @return mixed
     */
    public function generateContent();
}