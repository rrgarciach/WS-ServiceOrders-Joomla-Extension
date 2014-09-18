<?php
// No direct access to this file
defined('_JEXEC') or die;

// Get an instance of the controller prefixed by ServiceOrders
$controller = JControllerLegacy::getInstance('ServiceOrders');
 
// Perform the Request task/action
$action = JFactory::getApplication()->input->getCmd('action');

// Check if the action requested match with a method; otherwise call a defaul method
if (!method_exists($controller, $action))
    $action = 'getDefault';

// Run the action using the inherited method from JControllerLegacy class
$controller->execute($action);
 
// Stop the application to avoid the instantiation of the view (we don't need a view here)
JFactory::getApplication()->close(); // or jexit();