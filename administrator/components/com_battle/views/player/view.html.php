<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');

class BattleViewplayer extends JView
{
	function display($tpl = null)
	{
		$row =& JTable::getInstance('players', 'Table');
		$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
		$id = $cid[0];
		$row->load($id);
		$this->assignRef('row', $row);
		$editor =& JFactory::getEditor();
		$this->assignRef('editor', $editor);
		parent::display($tpl);
	}
}
