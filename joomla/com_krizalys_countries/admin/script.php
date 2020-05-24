<?php
/**
 * @package    Krizalys.Countries
 * @subpackage com_krizalys_countries
 * @copyright  Copyright (C) 2008 - 2020 Krizalys (http://www.krizalys.com/). All rights reserved.
 * @license    3-Clause BSD License (https://opensource.org/licenses/BSD-3-Clause).
 */

// No direct access
defined( '_JEXEC' ) or die('Restricted access');

class com_krizalys_countriesInstallerScript
{
    /**
     * @param  (string) $type
     * @param  (object) $parent
     */
    public function postflight($type, $parent)
    {
        $folder = sprintf('%s/components/com_krizalys_countries', JPATH_SITE);

        if (!JFolder::delete($folder)) {
            echo JText::sprintf('FILES_JOOMLA_ERROR_FILE_FOLDER', $folder) . '<br />';
        }
    }
}
