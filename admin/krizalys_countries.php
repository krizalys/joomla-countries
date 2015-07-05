<?php
/**
 * @package    Krizalys.Countries
 * @subpackage com_krizalys_countries
 * @copyright  Copyright (C) 2008 - 2013 Krizalys (http://www.krizalys.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */

// No direct access
defined( '_JEXEC' ) or die('Restricted access');

if (!JFactory::getUser()->authorise('core.manage', 'com_content'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$controller = JControllerLegacy::getInstance('KrizalysCountries');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
