<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('PDF')
    ->exclude('ckeditor')
    ->exclude('js')
    ->exclude('skin')
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers(array(
        'concat_with_spaces',
        'ordered_use',
        'extra_empty_lines',
        'remove_lines_between_uses',
        'indentation',
        'short_tag',
        'return',
        'unused_use',
        'whitespacy_lines',
    ))
    ->finder($finder);
