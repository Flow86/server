<?php

namespace OC\Preview;

class Webp extends Image {
	/**
	 * {@inheritDoc}
	 */
	public function getMimeType() {
		return '/image\/webp/';
	}
}
