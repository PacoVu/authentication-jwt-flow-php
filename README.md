## How to build and run the demo

### Create a RingCentral app
* Create an application at https://developer.ringcentral.com.
* Select `JWT auth flow` option for the Auth type.
* Add the `ReadAccounts` and `ReadMessages` and `ReadCallLog` permissions for the app.
* Choose the following option at the Security step
  - This app is private and will only be callable using credentials from the same RingCentral account
* Copy the Client id and Client secret and add them to the `dotenv` file as shown in the next section.
* Generate a sandbox JWT token for the app. Copy the JWT token and add them to the `dotenv` file as shown in the next section.

### Clone - Setup - Run the project
```
$ git clone https://github.com/paco-vu/authentication-jwt-flow-php

$ cd authentication-jwt-flow-php

$ curl -sS https://getcomposer.org/installer | php

$ php composer.phar install

$ cp dotenv .env
```

Specify the app credentials and the JWT token in the .env file accordingly
```
RC_SERVER_URL=https://platform.devtest.ringcentral.com
RC_CLIENT_ID=Your-App-Client-Id
RC_CLIENT_SECRET=Your-App-Client-Secret

JWT_TOKEN=Your-User-JWT-Token
```

### Run the demo

```
$ php -S localhost:5000
```

* Open your browser and enter the local address "locahost:5000"
* Click a link on the page to call an API
