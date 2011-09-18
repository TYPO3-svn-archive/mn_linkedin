<?php

########################################################################
# Extension Manager/Repository config file for ext "mn_linkedin".
#
# Auto generated 18-09-2011 19:02
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Linkedin',
	'description' => 'Linkedin javascript API integration for frontend.',
	'category' => 'plugin',
	'author' => 'Mattias Nilsson',
	'author_email' => 'tollepjaer@gmail.com',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:23:{s:21:"ExtensionBuilder.json";s:4:"06e1";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"0e6d";s:14:"ext_tables.php";s:4:"ac32";s:14:"ext_tables.sql";s:4:"5d3c";s:52:"Classes/Controller/LinkedinApplicationController.php";s:4:"62ef";s:44:"Classes/Domain/Model/LinkedinApplication.php";s:4:"3c93";s:59:"Classes/Domain/Repository/LinkedinApplicationRepository.php";s:4:"536a";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"dc9b";s:41:"Configuration/TCA/LinkedinApplication.php";s:4:"a81c";s:38:"Configuration/TypoScript/constants.txt";s:4:"e2bf";s:34:"Configuration/TypoScript/setup.txt";s:4:"6831";s:40:"Resources/Private/Language/locallang.xml";s:4:"6819";s:91:"Resources/Private/Language/locallang_csh_tx_mnlinkedin_domain_model_linkedinapplication.xml";s:4:"4b48";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"1184";s:38:"Resources/Private/Layouts/Default.html";s:4:"debc";s:57:"Resources/Private/Templates/LinkedinApplication/List.html";s:4:"c837";s:57:"Resources/Private/Templates/LinkedinApplication/Show.html";s:4:"15c1";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:73:"Resources/Public/Icons/tx_mnlinkedin_domain_model_linkedinapplication.gif";s:4:"905a";s:59:"Tests/Unit/Controller/LinkedinApplicationControllerTest.php";s:4:"e30d";s:51:"Tests/Unit/Domain/Model/LinkedinApplicationTest.php";s:4:"1909";s:14:"doc/manual.sxw";s:4:"fb17";}',
);

?>