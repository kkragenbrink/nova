<?php

return array(
	'admin' => array(
		'arc' => array(
			'ban_user' => "Level :0 ban was issued against :1",
			'unban_user' => "Ban was lifted against :0",
		),

		'catalog' => array(
			'module_create' => "The :0 module was installed",
			'module_update' => "The :0 module was updated",
			'module_delete' => "The :0 module was uninstalled",
		),

		'form' => array(
			'update' => "The :0 form was updated",

			'field_update' => "The :0 field in the :1 form was updated",
			'field_create' => "The :0 field was created in the :1 form",
			'field_delete' => "The :0 field in the :1 form was deleted",

			'section_update' => "The :0 section in the :1 form was updated",
			'section_create' => "The :0 section was created in the :1 form",
			'section_delete' => "The :0 section in the :1 form was deleted",

			'tab_update' => "The :0 tab in the :1 form was updated",
			'tab_create' => "The :0 tab was created in the :1 form",
			'tab_delete' => "The :0 tab in the :1 form was deleted",
		),

		'position' => "The :0 :1 was :2",

		'ranks' => array(
			'info' => "The :0 rank info record was :1",
			'item' => "Rank item was :0",
			'group' => "The :0 rank group was :1",
		),

		'user' => array(
			'item' => "The user :0 was :1"
		),
	),

	'login' => array(
		'suspend' => "User suspended for too many log in attempts",
		'suspended' => "User is currently suspended for too many log in attempts",
	),

	'main' => array(
		'join' => array(
			'application' => ":0 applied for the :1 :2 with the :3 :4",
		),
	),

	'setup' => array(
		'installed' => "System installed with version :0",
		'updated' => "System was updated to :0",
		'upgraded' => "System was upgraded from :0 2 to :1 :version",
		'genre_installed' => "Genre :0 was installed",
		'genre_uninstalled' => "Genre :0 was uninstalled",
	),
);
