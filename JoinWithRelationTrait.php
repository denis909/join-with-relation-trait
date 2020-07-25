<?php

namespace denis909\yii;

trait JoinWithRelationTrait
{

	protected $_joinWithRelation = [];

	public function joinWithRelation(string $name, $key = null)
	{
		if (array_search($key ?? $name, $this->_joinWithRelation) !== false)
		{
			return $this;
		}

		$this->_joinWithRelation[] = $key ?? $name;

		if ($key)
		{
			$name .= ' ' . $key;
		}

		return $this->joinWith($name);
	}

}