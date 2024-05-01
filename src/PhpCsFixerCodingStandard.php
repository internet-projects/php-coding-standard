<?php

declare(strict_types=1);

namespace InternetProjects\PhpCodingStandard;

use PhpCsFixer\ConfigInterface;

final class PhpCsFixerCodingStandard
{
    public static function applyTo(ConfigInterface $config, array $customRules = []): void
    {
        $config
            ->setRiskyAllowed(true)
            ->setRules(array_merge(
                [
                    '@PHP82Migration' => true,
                    '@PhpCsFixer' => true,
                    '@PhpCsFixer:risky' => true,
                    'function_declaration' => ['closure_fn_spacing' => 'none'],
                    'concat_space' => ['spacing' => 'one'],
                    'cast_spaces' => ['space' => 'none'],
                    'yoda_style' => [
                        'equal' => false,
                        'identical' => false,
                        'less_and_greater' => false,
                        'always_move_variable' => false,
                    ],
                    'phpdoc_to_comment' => false,
                    'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
                    'phpdoc_types_order' => ['sort_algorithm' => 'none', 'null_adjustment' => 'always_last'],
                    'increment_style' => ['style' => 'post'],
                    'native_function_invocation' => false,
                    'php_unit_internal_class' => false,
                    'no_alternative_syntax' => ['fix_non_monolithic_code' => false],
                    'echo_tag_syntax' => ['format' => 'short', 'shorten_simple_statements_only' => true],
                    'semicolon_after_instruction' => false,
                    'date_time_immutable' => true,
                    'ordered_types' => false,
                    'fully_qualified_strict_types' => true,
                ],
                $customRules
            ));
    }
}
