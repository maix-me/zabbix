<?php
/*
** Zabbix
** Copyright (C) 2001-2014 Zabbix SIA
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/


class CButton extends CInput {

	/**
	 * For inputs of type "button", the "&" symbol should not be encoded.
	 *
	 * @var int
	 */
	protected $attrEncStrategy = self::ENC_NOAMP;

	public function __construct($name = 'button', $caption = '', $action = null, $class = null) {
		parent::__construct('button', $name, $caption, $class);
		$this->addAction('onclick', $action);
		return $this;
	}

	public function useJQueryStyle() {
		$this->attr('class', 'jqueryinput '.$this->getAttribute('class'));
	}

	public function main() {
		$this->addClass('main');
	}
}
