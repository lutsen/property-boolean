<?php

namespace Lagan\Property;

/**
 * Controller for the Lagan boolean property.
 * This can't actually be a "real" boolean because this breaks Lagan. Thats why we use a 0 or a 1 instead.
 *
 * A property type controller can contain a set, read, delete and options method. All methods are optional.
 * To be used with Lagan: https://github.com/lutsen/lagan
 */

class Boolean {

	/**
	 * The set method is executed each time a property with this type is set.
	 *
	 * @param bean		$bean		The Redbean bean object with the property.
	 * @param array		$property	Lagan model property arrray.
	 * @param boolean	$new_value	The input of this property.
	 *
	 * @return boolean	The Lagan base model checks if a property is set. This controller just sets the value to `true` if it is.
	 */
	public function set($bean, $property, $new_value) {

		return $new_value ? 1 : 0;

	}

}

?>