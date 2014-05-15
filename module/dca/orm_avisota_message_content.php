<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-message-element-headline
 * @license    LGPL-3.0+
 * @filesource
 */


/**
 * Table orm_avisota_message_content
 * Entity Avisota\Contao:MessageContent
 */
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metapalettes']['headline'] = array
(
	'type'      => array('type', 'cell', 'headline'),
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
