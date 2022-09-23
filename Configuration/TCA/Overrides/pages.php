<?php
defined('TYPO3') || die();

call_user_func(function () {
    /**
     * Extension key
     */
    $extensionKey = 'typo3-fld-site-package';

    /**
     * Default PageTS for typo3-fld-site-package
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/main.tsconfig',
        'typo3-fld-site-package'
    );
});
