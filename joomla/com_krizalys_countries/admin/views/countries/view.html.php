<?php
/**
 * @package    Krizalys.Countries
 * @subpackage com_krizalys_countries
 * @copyright  Copyright (C) 2008 - 2019 Krizalys (http://www.krizalys.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */

// No direct access
defined( '_JEXEC' ) or die('Restricted access');

class KrizalysCountriesViewCountries extends JViewLegacy
{
	public function display($tpl = null)
	{
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		$this->addToolbar();
		parent::display($tpl);
	}

	protected function addToolbar()
	{
		JToolBarHelper::title('Krizalys Countries', 'article.png');
	}
}
