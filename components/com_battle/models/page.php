<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.model');

class BattleModelPage extends JModel
{
	var $_data = null;
	
	function get_page($id)
	{
		if (empty($this->_data)) {
			$query = "SELECT * FROM #__jigs_pages WHERE id = $id ";
			$this->_data = $this->_getList($query);
		}
		
		return $this->_data;
	}
}
