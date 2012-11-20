<?php

return array(
	'email' => array(
		'subject' => array(
			'passwordReset' => "Confirm Password Reset",

			'arc' => array(
				'addReviewer' => "Application Review",
				'reviewStart' => 'New Application Review Started',
				'emailApplicant' => 'Email Regarding Your Application',
				'response' => 'Application Response',
			),

			'user' => array(
				'add' => "User Record Created",
			),
		),

		'content' => array(
			'passwordReset' => "A password reset has been requested for the account associated with this email address. Since this is a two step process, you must now confirm your reset in order for your password to be changed.\r\n\r\n:0\r\n\r\nIf you did not request this reset, please contact your game master immediately and notify them of the issue. After doing so, you should log in to the site using your current password. Doing so will cancel the reset request.",

			'arc' => array(
				'addReviewer' => "You have been added to an application review. From the Application Review Center you can review the application, comment on it and vote on whether you think it should be approved or rejected.\r\n\r\n<a href='".\Uri::create('login/index')."'>Log in</a> to start participating in the review.",
				'reviewStart' => "A new application has been received and is available for review. From the Application Review Center you can review the application, comment on it and vote on whether you think it should be approved or rejected.\r\n\r\n<a href='".\Uri::create('login/index')."'>Log in</a> to start participating in the review.",
			),

			'user' => array(
				'add' => "A :0 record has been manually created for you on the :1 RPG (:2). Your :3 details are below:\r\n\r\nName: :4\r\nPassword: :5",
			),
		),

		'error' => array(
			'noToAddress' => "Could not find TO address data.",
			'noSubject' => "Could not find SUBJECT data.",
		),

		'help' => array(
			'notify' => "When a new :0 is created, you will be notified about it through email",
			'notifyPostsAction' => "When a joint :0 you're involved in is :1, you will be notified about it through email",
			'notifyComments' => "When a new :0 is added to a :1, :2, or :3 that you're part of, you will be notified about it through email",
			'notifyMessages' => "When you're sent a new :0, you will be notified about it through email",
		),
	)
);
