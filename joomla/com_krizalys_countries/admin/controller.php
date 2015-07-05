<?php
/**
 * @package    Krizalys.Countries
 * @subpackage com_krizalys_countries
 * @copyright  Copyright (C) 2008 - 2015 Krizalys (http://www.krizalys.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */

// No direct access
defined( '_JEXEC' ) or die('Restricted access');

class KrizalysCountriesController extends JControllerLegacy
{
	protected $default_view = 'countries';

	public function display($cachable = false, $urlparams = false)
	{
		$view = JRequest::getCmd('view', 'countries');
		$layout = JRequest::getCmd('layout', 'countries');
		$id = JRequest::getInt('id');

		if ($view == 'countries' && $layout == 'edit' && !$this->checkEditId('com_content.edit.article', $id))
		{
			$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
			$this->setMessage($this->getError(), 'error');
			$this->setRedirect(JRoute::_('index.php?option=com_krizalys_countries&view=countries', false));
			return false;
		}

		parent::display();
		return $this;
	}
}
