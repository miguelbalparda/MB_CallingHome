<?php
class MB_CallingHome_Model_Observer
{
  public function addMessage($observer) {
  	exec(Mage::getStoreConfig('calling/home/nasty', Mage::app()->getStore()), $calling);
  	if ($calling){
  		foreach ($calling as $key => $value) {
		    Mage::log($value, null, 'callinghome.log');
  		}
	Mage::getSingleton('adminhtml/session')->addWarning('Some modules might be doing nasty things to you. Check calling.log to see more.'); 
  	}
  }
}
?>