<?php

namespace denis909\yii;

trait JoinWithRelationTrait
{

	protected $_joinWithRelation = [];

	public function joinWithRelation(string $name)
	{
		if (array_search($key, $this->_joinWithRelation) !== false)
		{
			return $this;
		}

		$this->_joinWithRelation[] = $key;

		return $this->joinWith($name);
	}

}