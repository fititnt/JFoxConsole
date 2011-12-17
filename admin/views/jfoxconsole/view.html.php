<?php

/**
 * @package     JFoxConsole
 * @author      Emerson Rocha Luiz - emerson at webdesign.eng.br - fititnt
 * @copyright   Copyright (C) 2011 Webdesign Assessoria em Tecnologia da Informacao. All rights reserved.
 * @license     GNU General Public License version 3. See license.txt
 */
defined('_JEXEC') or die;

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * JFoxConsole View
 */
class JFoxConsoleViewJFoxConsole extends JView {

    function display($tpl = null) {

        JToolBarHelper::title(JText::_('COM_JFOXCONSOLE_NAME'), 'generic.png');
        JToolBarHelper::preferences('com_jfoxconsole', '270', '500');


        $code = $this->get('Runcode');
        $this->result = $code;

        //Return to display
        parent::display($tpl);
    }

}
