<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_battle'.DS.'tables');

class BattleViewCar extends JView
{	
	function display($tpl = null)
	{
		$id = (int) JRequest::getVar('id', 0);
		
		$cars =& JTable::getInstance('cars', 'Table');
		$cars->load($id);
		
		
		
		
		$backlink = JRoute::_('index.php?option=com_battle');
		
		$user =& JFactory::getUser();
		
		$this->assignRef('cars', $cars);		
		$this->assignRef('backlink', $backlink);
		
		
		parent::display($tpl);
	}
}
