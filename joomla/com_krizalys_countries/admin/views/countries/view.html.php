<?php
/**
 * @package    Krizalys.Countries
 * @subpackage com_krizalys_countries
 * @copyright  Copyright (C) 2008 - 2020 Krizalys (http://www.krizalys.com/). All rights reserved.
 * @license    3-Clause BSD License (https://opensource.org/licenses/BSD-3-Clause).
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
