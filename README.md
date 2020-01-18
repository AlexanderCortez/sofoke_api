Sofoke API

## Development

In the directory `api/`, please create a file with the name `env.php` containing the following code:

```
<?php
class ENV {
	protected $env = 'development';
  protected $uriDB = [
    'development' => [
      'cookies' => [
        'uri' => 'mysql:host=127.0.0.1; dbname=cookies; charset=utf8',
        'user' => '',
        'pwd' => ''
      ],
      'sofoke' => [
        'uri' => 'mysql:host=127.0.0.1; dbname=sofoke; charset=utf8',
        'user' => '',
        'pwd' => ''
      ],
      'links' => [
        'uri' => 'mysql:host=127.0.0.1; dbname=links; charset=utf8',
        'user' => '',
        'pwd' => ''
      ]
    ],
  ];
}
?>
```

`$env` = current environment 'development'|'production'