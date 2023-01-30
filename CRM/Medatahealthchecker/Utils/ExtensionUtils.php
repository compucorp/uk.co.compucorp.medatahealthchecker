<?php

class CRM_Medatahealthchecker_Utils_ExtensionUtils {

  public static function isExtensionEnabled($extensionName) {
    $result = civicrm_api3('Extension', 'get', [
      'sequential' => 1,
      'full_name' => $extensionName,
    ]);

    if ($result['count'] === 1 && $result['values'][0]['status'] === 'installed') {
      return TRUE;
    }

    return FALSE;
  }

}
