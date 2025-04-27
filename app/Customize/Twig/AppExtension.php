<?php

namespace Customize\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('clean_nl2br', [$this, 'cleanNl2br'], ['is_safe' => ['html']]),
        ];
    }

    public function cleanNl2br(string $text): string
    {
        // Convert \n to <br>
        $text = nl2br($text, false);

        // Remove <br> at start
        $text = preg_replace('/^(<br\s*\/?>\s*)+/i', '', $text);

        // Remove <br> at end
        $text = preg_replace('/(<br\s*\/?>\s*)+$/i', '', $text);

        return $text;
    }
}
