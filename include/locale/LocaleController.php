<?php
function init_language($language) {
	if (in_array($language, CommonConst::SUPPORTED_LANGUAGES)) {
		require_once $_SERVER['DOCUMENT_ROOT'] . CHILD_SITE . '/include/locale/lang_' . $language . '.php';
	} else {
		require_once $_SERVER['DOCUMENT_ROOT'] . CHILD_SITE . '/include/locale/lang_en.php';
	}
}

function __($key) {
    return CurrentLanguage::LANG[$key];
}
