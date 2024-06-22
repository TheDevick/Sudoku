<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'php_unit_method_casing' => ['case' => 'snake_case'],
        'phpdoc_to_comment' => ['ignored_tags' => ['var']],
        'heredoc_indentation' => ['indentation' => 'same_as_start'],
        'no_superfluous_phpdoc_tags' => false
    ])
    ->setFinder($finder)
;