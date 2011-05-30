<?php
/**
* Content class is the base class of various specific content classes (eg: video)
* All functions that deal with abstract content are packaged in this class. Any function handling abstract content MUST be packaged here. 
* Specific content must be packaged in its own class.
* @author Vipin Nair <swvist@gmail.com>
* @author Jaseem Abid <jaseemabid@gmail.com>
* @copyright Copyright (c) 2011, Vipin Nair & Jaseem Abid
* @license http://www.gnu.org/licenses/gpl.html GNU General Public License 
* @package content
*/

/**
* Includes files for database connectivity.
*/
include 'database.php';

/**
* Content class. Defined as abstract and is a reference implementation for specific content classes.
* @package content
*/
abstract class content
{
	
	public $cid,$title,$desc,$timestamp,$uid,$status,$views;
	
	/**
	*  Abstarct function that MUST be implemented in subclasses to get specific content details.
	*/
	abstract protected function getDetails();
	public function _construct($cid)
	{
		$this->cid=$cid;
	}
	public function getContentId()
	{
		return $this->cid;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function getDesc()
	{
		return $this->desc;
	}
	public function getTimestamp()
	{
		return $this->timestamp;
	}
	public function getStatus()
	{
		return $this->status;
	}
	public function getViews()
	{
		return $this->views;
	}
	public function getUserId()
	{
		return $this->uid;
	}
}

?>
