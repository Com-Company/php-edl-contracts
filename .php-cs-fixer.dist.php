<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude([
        'vendor',
    ])
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setRules([
        '@Symfony' => true,
        '@PSR1' => true,
        '@PSR2' => true,
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'align_multiline_comment' => true,
        'blank_line_before_statement' => true,
        'cast_spaces' => ['space' => 'none'],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'compact_nullable_type_declaration' => true,
        'concat_space' => ['spacing' => 'one'],
        'declare_equal_normalize' => true,
        'declare_strict_types'=> true,
        'string_implicit_backslashes' => true,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'type_declaration_spaces' => true,
        'implode_call' => true,
        'yoda_style' => false,
        'line_ending' => true,
        'lowercase_cast' => true,
        'constant_case' => true,
        'lowercase_static_reference' => true,
        'mb_str_functions' => true,
        'method_chaining_indentation' => true,
        'class_attributes_separation' => false,
        'new_with_parentheses' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_extra_blank_lines' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_null_property_initialization' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_after_function_name' => true,
        'no_spaces_around_offset' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_unreachable_default_argument_value' => true,
        'no_unused_imports' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'object_operator_without_whitespace' => true,
        // 'ordered_class_elements' => true
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'phpdoc_separation' => [
            'groups' => [
                ['author', 'copyright', 'license'],
                ['ORM\\*'],
                ['Assert\\*', 'MyAssert\\*', 'CustomAssert\\*'],
            ]
        ],
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,
        'psr_autoloading' => true,
        'return_type_declaration' => true,
        'semicolon_after_instruction' => true,
        'single_quote' => true,
        // 'strict_comparison' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'trim_array_spaces' => true,
        // 'void_return' => true,
        'whitespace_after_comma_in_array' => true,
    ])
    ->setFinder($finder)
    ;
