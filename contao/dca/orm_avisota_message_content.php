<?php


/**
 * Table orm_avisota_message_content
 * Entity Avisota\Contao:MessageContent
 */
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metapalettes']['headline'] = array
(
    'type'      => array('cell', 'type', 'headline'),
    'expert'    => array(':hide', 'cssID', 'space'),
    'published' => array('invisible'),
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['headline'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['headline'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'inputUnit',
    'options'   => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
    'eval'      => array('maxlength' => 255, 'tl_class' => 'clr'),
);
