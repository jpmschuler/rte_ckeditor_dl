<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
call_user_func(function () {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
		'rte_ckeditor_dl',
		'Configuration/TsConfig/Page/definitionlists.ts',
		'RTE: definition lists'
	);
});
