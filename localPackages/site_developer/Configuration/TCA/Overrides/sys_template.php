<?php

(function (string $extensionKey = 'site_developer') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/',
        'TYPO3 Developer'
    );
})();
