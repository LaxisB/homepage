./backup.sh

echo "Pulling updates from origin"
git pull
rm -rf vendor
echo "Installing packages"
npm ci
npm run build
composer install


echo "Deploying"
rsync -ac site/ /var/www/html/site --exclude accounts --exclude sessions --exclude cache --exclude logs
rsync -ac vendor/ /var/www/html/vendor 
rsync -ac --delete kirby/ /var/www/html/kirby
cp index.php /var/www/html/index.php
cp favicon* /var/www/html
