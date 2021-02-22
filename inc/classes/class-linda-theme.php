<?php
/**
 * Bootstraps the theme
 *
 * @package linda
 */

namespace LINDA_THEME\Inc;

use LINDA_THEME\Inc\Traits\Singleton;

class LINDA_THEME {
	use Singleton;

	protected public function __construct() {
		//load class.
		$this->set_hooks();
	}

	protected function set_hooks() {
		//actions and filters.
	}
}