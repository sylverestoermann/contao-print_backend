<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package Print_Backend
 * @author  Dr. Sylvère Störmann, 101010 Webdesign: Die Homepage-Doktoren
 * @link    https://101010-webdesign.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace PrintBackend;

class Combiner extends \Contao\Combiner
{
	public function getCombinedFile($strUrl=null)
	{
		global $controller;
		if (is_object($controller) && $controller->getTheme() == 'default' && $this->strMode == '.css') {
			$this->add('system/modules/print_backend/assets/be_print.css', null, 'print');
		}
		return parent::getCombinedFile($strUrl);
	}
}

?>