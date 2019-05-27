<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use Doctrine\ORM\Query\SqlWalker;

/**
 * MBRContainsWorkaround DQL function
 *
 * Workaround of MySQL not using Key on MBRContains when set equal to 1 or true.
 *
 * @author  Emil Godsk <emg@amsiq.com>
 */
class MBRContainsWorkaround extends MBRContains
{
	/**
	 * @param SqlWalker $sqlWalker
	 *
	 * @return string
	 */
	public function getSql(SqlWalker $sqlWalker)
	{
		return parent::getSql($sqlWalker).' AND 1';
	}
}
