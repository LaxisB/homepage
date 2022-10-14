<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen.
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
  "debug" => false,
  "panel.install" => true,
  "smartypants" => true,
  "lukaskleinschmidt.terminal.scripts" => [
    "deploy" => 'cd /home/www/homepage && ./deploy.sh',
  ],
  "thumbs" => [
    "srcsets" => [
      "default" => [
        "800w" => ["width" => 800, "quality" => 80],
        "1024w" => ["width" => 1024, "quality" => 80],
        "1440w" => ["width" => 1440, "quality" => 80],
        "2048w" => ["width" => 2048, "quality" => 80],
      ],
      "webp" => [
        "800w" => ["width" => 800, "quality" => 80, "format" => "webp"],
        "1024w" => ["width" => 1024, "quality" => 80, "format" => "webp"],
        "1440w" => ["width" => 1440, "quality" => 80, "format" => "webp"],
        "2048w" => ["width" => 2048, "quality" => 80, "format" => "webp"],
      ],
      "small" => [
        "100w" => ["width" => 100, "quality" => 80],
        "200w" => ["width" => 200, "quality" => 80],
        "400w" => ["width" => 400, "quality" => 80],
        "800w" => ["width" => 800, "quality" => 80],
      ],
    ],
  ]
];
