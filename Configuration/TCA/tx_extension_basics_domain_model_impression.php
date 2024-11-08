<?php

return [
    'ctrl' => [
        'title' => 'Impression',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'iconfile' => 'EXT:extension_basics/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'title, teaser, bodytext',
        'enablecolumns' => [
            'fe_group' => 'fe_group',
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
    ],
    'columns' => [
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 25,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'teaser' => [
            'label' => 'Teaser',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 100,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'bodytext' => [
            'label' => 'Text',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'required' => true,
            ],
        ],
        'image' => [
            'label' => 'Image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ]
        ]
    ],
    'types' => [
        1 => [
            'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            title, teaser, bodytext, image,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden,'
        ],
    ],
];
