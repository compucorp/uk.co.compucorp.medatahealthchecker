<?php

require_once 'medatahealthchecker.civix.php';
// phpcs:disable
use CRM_Medatahealthchecker_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function medatahealthchecker_civicrm_config(&$config) {
  _medatahealthchecker_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function medatahealthchecker_civicrm_install() {
  _medatahealthchecker_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function medatahealthchecker_civicrm_enable() {
  _medatahealthchecker_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_navigationMenu().
 */
function medatahealthchecker_civicrm_navigationMenu(&$menu) {
  $issuesDashboardMenuItem = [
    'name' => 'medatahealthchecker_issues_dashboard',
    'label' => ts('Data Health Checker Dashboard'),
    'url' => 'civicrm/medatahealthchecker/issues-dashboard',
    'permission' => 'administer CiviCRM,administer MembershipExtras',
    'operator' => 'OR',
    'separator' => 2,
  ];

  _medatahealthchecker_civix_insert_navigation_menu($menu, 'Administer/CiviContribute', $issuesDashboardMenuItem);
}
