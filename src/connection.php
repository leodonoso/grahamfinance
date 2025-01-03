<?php 
    class Connection {
        private $credentials;
        private $client;
        private $is_connected;

        public function __construct()
        {
            $this->credentials = "credentials.json";
            $this->client = $this->create_client();
        }

        public function get_client() {
            return $this->client;
        }

        public function get_credentials() {
            return $this->credentials;
        }

        public function is_connected() {
            return $this->is_connected;
        }

        public function get_unauthenticated_data() {
            $authUrl = $this->client->createAuthUrl();
            echo "<a href='$authUrl'> Enable Gmail</a>";
        }

        public function credentials_in_browser() {
            if($_GET['code']) {
                return true;
            }
            else {
                return false;
            }
        }

        public function create_client() {
            $client = new Google_Client();
            $client->setApplicationName("Graham's Email Reader");
            $client->setScopes(array("https://mail.google.com/"));
            $client->setAuthConfig('credentials.json');
            $client->setAccessType('offline');
            $client->setPrompt('select_account consent');

            $tokenPath = 'token.json';
            if (file_exists($tokenPath)) {
                $accessToken = json_decode(file_get_contents($tokenPath), true);
                $client->setAccessToken($accessToken);
            }

            // If there is no previous token or if it's experied, make a new one.
            if ($client->isAccessTokenExpired()) {
                // Use refresh token to get a new updated access token
                if ($client->getRefreshToken()) {
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                }

                // If there's no refresh token, check if there's a code in the browser and use it to make a new access token.
                elseif ($this->credentials_in_browser()) {
                    $authCode = $_GET['code'];
                    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                    $client->setAccessToken($accessToken);
                }

                // If there is no refresh token and no code, we return that we are not connected, so we can request authorization from the user
                else {
                    $this->is_connected = false;
                    return $client;
                }
            }
            // If we have the token
            else { echo "We good chat ✅"; }

            $this->is_connected = true;
            return $client;
        }
    }
?>