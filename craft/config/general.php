<?php

/**
 * Default Configuration Variables
 *
 * I would prefer to have all of my configuration variables defined, even if I
 * don't have any intention of changing from the default. I would rather have
 * these options available in a file than refer back to the online docs
 */

$defaults = array(
	'actionTrigger'                         => 'action',
    'activeAccountFailurePath'              => NULL,
    'activateAccountSuccessPath'            => NULL,
    'allowedFileExtensions'                 => '7z, aiff, asf, avi, bmp, csv, doc, docx, fla, flv, gif, gz, gzip, htm, html, jpeg, jpg, mid, mov, mp3, mp4, m4a, m4v, mpc, mpeg, mpg, ods, odt, ogg, pdf, png, ppt, pptx, pxd, qt, ram, rar, rm, rmi, rmvb, rtf, sdc, sitd, svg, swf, sxc, sxw, tar, tgz, tif, tiff, txt, vsd, wav, webm, wma, wmv, xls, xlsx, zip',
    'backupDbOnUpdate'                      => true,
    'blowfishHashCost'                      => 13,
    'cacheDuration'                         => 'P1D', // 1 day
    'cooldownDuration'                      => 'PT5M', // 5 minutes
    'cpTrigger'                             => 'admin',
    'customAsciiCharMappings'               => NULL,
    'defaultFolderPermissions'              => 0755,
    'defaultImageQuality'                   => 75,
    'defaultTemplateExtensions'             => array('html', 'twig'),
    'devMode'                               => false,
    'environmentVariables'                  => array(),
    'generateTransformsAfterPageLoad'       => true,
    'indexTemplateFilenames'                => array('index'),
    'invalidLoginWindowDuration'            => 'PT1H', // 1 hour
    'loginPath'                             => 'login',
    'logoutPath'                            => 'logout',
    'maxCachedCloudImageSize'               => 2000,
    'maxInvalidLogins'                      => 5,
    'omitScriptNameInUrls'                  => 'auto', // true, false, 'auto'
    'overridePhpSessionLocation'            => 'auto', // true, false, 'auto'
    'pageTrigger'                           => 'p',
    'phpMaxMemoryLimit'                     => '256M',
    'phpPass-iterationCount'                => 8,
    'rememberUsernameDuration'              => 'P1Y', // 1 year
    'rememberUserSessionDuration'           => 'P2W', // 2 weeks
    'requireMatchingUserAgentForSession'    => true,
    'requireUserAgentAndIpForSession'       => true,
    'resourceTrigger'                       => 'resources',
    'restoreDbOnUpdateFailure'              => true,
    'searchIgnoreWords'                     => array('the', 'and'),
    'setPasswordPath'                       => 'setpassword',
    'setPasswordSuccessPath'                => '',
    'siteRoutesSource'                      => 'db', // 'db' or 'file'
    'testToEmailAddress'                    => NULL,
    'translationDebugOutput'                => false,
    'useCompressedJs'                       => true,
    'usePathInfo'                           => 'auto', // true, false, 'auto'
    'userSessionDuration'                   => false,
    'useXSendFile'                          => false,
    'verificationCodeDuration'              => 'P1D', // 1 day
    'writableFilePermissions'               => 0777,
    'writableFolderPermissions'             => 0777,
);

/**
 * 1. Return the defaults
 * 2. Override with the selected environment's config
 */

$multi_env_config = array(
	'*'	=> $defaults,
	CRAFT_ENVIRONMENT => $env_conf,
);

// return config settings
return $multi_env_config;