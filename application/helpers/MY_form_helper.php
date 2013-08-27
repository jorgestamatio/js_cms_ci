<?php 
/**
* Text Input Field
*
* @access	public
* @param	mixed
* @param	string
* @param	string
* @return	string
*/
/*
	Function: _form_common()

	Used by many of the new functions to wrap the input in the correct
	tags so that the styling is automatic.

	Parameters:
		$type	- A string with the name of the element type.
		$data	- Either a string with the element name, or an array of
				  key/value pairs of all attributes.
		$value	- Either a string with the value, or blank if an array is
				  is passed to the $data param.
		$label	- A string with the label of the element.
		$extra	- A string with any additional items to include, like Javascript.
		$tooltip - A string for inline help or a tooltip icon

	Returns:
		A string with the formatted input element, label tag and wrapping divs.
*/
if (!function_exists('_form_common'))
{
	function _form_common($type='text', $data='', $value='', $label='', $extra='', $tooltip = '')
	{
		$defaults = array('type' => 'text', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		// If name is empty at this point, try to grab it from the $data array
		if (empty($defaults['name']) && is_array($data) && isset($data['name']))
		{
			$defaults['name'] = $data['name'];
			unset($data['name']);
		}
		$output = _parse_form_attributes($data, $defaults);
		$output = <<<EOL
	<div class="form-group">
    <label for="{$defaults['name']}">{$label}</label>
    <input {$output} {$extra} class="form-control" />
  </div>

EOL;

		return $output;
	}
}



if (!function_exists('form_input_bs'))
{
	function form_input_bs($data='', $value='', $label='', $extra='')
	{
		return _form_common('text', $data, $value, $label, $extra);
	}
}


?>