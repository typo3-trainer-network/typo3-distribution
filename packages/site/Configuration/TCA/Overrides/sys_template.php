<?php

(function (string $extensionKey = 'site') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/',
        'TYPO3 sitepackage'
    );
})();
