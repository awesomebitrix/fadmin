<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 11.01.2016
 * Time: 17:37
 *
 * @author Pavel Shulaev (http://rover-it.me)
 */

namespace Rover\Fadmin\Inputs;

/**
 * Class Hidden
 *
 * @package Rover\Fadmin\Inputs
 * @author  Pavel Shulaev (http://rover-it.me)
 */
class Hidden extends Text
{
	/**
	 * @var string
	 */
	public static $type = self::TYPE__HIDDEN;

	/**
	 * @author Pavel Shulaev (http://rover-it.me)
	 */
	public function draw()
	{
		$valueId    = $this->getValueId();
		$valueName  = $this->getValueName();

		?><input id="<?php echo $valueId?>" maxlength="<?php echo $this->maxLength?>" type="hidden" value="<?php $this->value?>" name="<?php echo $valueName?>"><?php
	}
}