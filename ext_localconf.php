<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addPageTSConfig("
    @import 'EXT:typo3-fld-site-package/Configuration/TsConfig/main.tsconfig'
");

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['typo3-fld-site-package'] = 'EXT:typo3-fld-site-package/Configuration/RTE/Default.yaml';

