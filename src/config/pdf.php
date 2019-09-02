<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => storage_path('app/public/temp/'),
    
    'font_path' => storage_path('fonts/'),
	'font_data' => [
		'roboto' => [
			'R'  => 'Roboto-Regular.ttf',    // regular font
			'B'  => 'Roboto-Bold.ttf',       // optional: bold font
			'I'  => 'Roboto-Italic.ttf',     // optional: italic font
			'BI' => 'Roboto-BoldItalic.ttf' // optional: bold-italic font
			//'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
		],
            'press' => [
			'R'  => 'PressStart2P-Regular.ttf',    // regular font
			
		]
	]

];