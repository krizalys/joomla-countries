<?php
/**
 * @package    Krizalys.Countries
 * @subpackage com_krizalys_countries
 * @copyright  Copyright (C) 2008 - 2015 Krizalys (http://www.krizalys.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
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
