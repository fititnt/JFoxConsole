<?php

/**
 * @package     JFoxConsole
 * @author      Emerson Rocha Luiz - emerson at webdesign.eng.br - fititnt
 * @copyright   Copyright (C) 2011 Webdesign Assessoria em Tecnologia da Informacao. All rights reserved.
 * @license     GNU General Public License version 3. See license.txt
 */
defined('_JEXEC') or die;

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * General Controller of HelloWorld component
 */
class JFoxConsoleController extends JController
{
	/**
	 * display task
	 *
	 * @return void
	 */
	function display($cachable = false) 
	{
		// set default view if not set
                JRequest::setVar('format', JRequest::getCmd('format', 'html'));
		JRequest::setVar('view', JRequest::getCmd('view', 'jfoxconsole'));
                
                // call parent behavior
		parent::display($cachable);
	}




}

