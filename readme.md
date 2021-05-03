# PHP Shopify SDK for Admin (Rest API) - Implementation Program
Example implementation of Shopify SDK (PHP) by PHPClassic

## Installation:
1. Clone or download this repo on your machine, then do install php-shopify sdk [(php-shopify github)](https://github.com/phpclassic/php-shopify)
2. Make sure you're already have Shopify Partners account and do login. Go to Apps section page and click create app
3. Choose "Custom app", fill "App name" as you wish, fill "App URL" with "http://{your_machine_host}/app_url.php", and fill "Allowed redirection URL(s)" with "http://{your_machine_host}/install.php". then, click "Create app"

![alt text](screenshots/installation_3.jpg?raw=true "Create Custom App")

4. Your custom app page will show up, then click "Generate link". Custom app only allowed to install in one shopify store. Define "Merchant's myshopify.com domain" with your client shopify store domain, then click "Generate link"

![alt text](screenshots/installation_4_1.jpg?raw=true "Custom App Homepage")

![alt text](screenshots/installation_4_2.jpg?raw=true "Generate Link Page")

5. You'll see "Merchant install link" is now available. Send this link later to your client for installing your custom app on their store

![alt text](screenshots/installation_5.jpg?raw=true "Custom App Homepage")

6. Adjust your app credentials in "custom_app_credentials.json"
7. Run this program on server. Make sure your client can access {your_machine_host} when installing your custom app. If you wish to install this program on your own, open your store in incognito or different browser then click the "Merchant install link". Installation prompt will appear

![alt text](screenshots/installation_7.jpg?raw=true "Custom App Installation Prompt")

8. You'll redirected to installation success page, then check your machine folder, you'll see new file for "access token" in "custom_app_token.json"
9. now you can access index.php for getting some data from your client store