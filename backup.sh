#!/bin/env bash

echo "Backing up current Website to /home/www/backups"
tar -czf ~/backup/`date -I`.tar.gz /var/www/html 
