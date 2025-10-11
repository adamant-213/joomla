<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_helloworld
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;

$message   = $params->get('message', 'Hello, Joomla World!');
$showUser  = (bool) $params->get('show_user', 1);

$user = Factory::getUser(); // Get the current user
if ($showUser && !$user->guest) {
    $message .= ' ' . htmlspecialchars($user->name) . '!';
}

// Load the layout
require ModuleHelper::getLayoutPath('mod_helloworld', $params->get('layout', 'default'));

