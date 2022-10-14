# Valean Homepage

built using [Kirby CMS](https://getkirby.com)

## Startup

make sure that nodejs, composer and a supported php version is installed (check composer.json for details). Additionally, we'll need some extra php modules: curl, gd, json, mbstring, opcache, readline, sqlite, xml, zip

-   run `composer install` (if not already done)
-   run `npm install` (or the alternative of your choice)
-   run `composer start` to start the devserver
-   run `npm start` to start the frontend pipeline as watcher

## Interesting places:

| path            | what is it                                                 |
| --------------- | ---------------------------------------------------------- |
| build.js        | pipeline for frontend assets (scss, ts)                    |
| site/assets     | source for site-wide assets. output is stored in /assets   |
| site/blueprints | yaml files that define custom pages, snippets, fields, etc |
| site/templates  | templates for blueprints (need identical name)             |
| content         | content for created pages. is managed by kirby             |
