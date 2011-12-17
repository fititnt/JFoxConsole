<?php

/**
 * @package     JFoxConsole
 * @author      Emerson Rocha Luiz - emerson at webdesign.eng.br - fititnt
 * @copyright   Copyright (C) 2011 Webdesign Assessoria em Tecnologia da Informacao. All rights reserved.
 * @license     GNU General Public License version 3. See license.txt
 */
defined('_JEXEC') or die;

//Block non superadmins
if (!JFactory::getUser()->authorise('core.admin', 'com_jfoxconsole'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}


// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller
$controller = JController::getInstance('JFoxConsole');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
