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


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'PrintBackend',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'PrintBackend\Combiner' => 'system/modules/print_backend/classes/Combiner.php',
));
