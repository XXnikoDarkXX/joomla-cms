<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_finder
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Dutch language support class for the Finder indexer package.
 *
 * @since  4.0.0
 */
class FinderIndexerLanguagenl extends FinderIndexerLanguage
{
	/**
	 * Language locale of the class
	 *
	 * @var    string
	 * @since  4.0.0
	 */
	public $language = 'nl';

	/**
	 * The dutch stemmer object.
	 *
	 * @var    \Wamania\Snowball\Dutch
	 * @since  4.0.0
	 */
	protected $stemmer = null;

	/**
	 * Method to construct the language object.
	 *
	 * @since   4.0.0
	 */
	public function __construct()
	{
		$this->stemmer = new \Wamania\Snowball\Dutch;
	}

	/**
	 * Method to stem a token.
	 *
	 * @param   string  $token  The token to stem.
	 *
	 * @return  string  The stemmed token.
	 *
	 * @since   4.0.0
	 */
	public function stem($token)
	{
		return $this->stemmer->stem($token);
	}
}
