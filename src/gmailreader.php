<?php 
    class GrahamOAuthClient {
        public function __construct()
        {
            $this->include();
        }

        private function include() {
            include "../vendor/autoload.php";
            include "connection.php";
        }

        public function run() {
            $conn = new Connection();

            if ($conn->is_connected()) {
                require_once("grahamgmail.php");
                $gmail = new GrahamGmail($conn->get_client());
                return $gmail->read_labels();
            }
            else {
                return $conn->get_unauthenticated_data();
            }
        }
    }

    $oauth_client = new GrahamOAuthClient();

    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Email Reader</title>
        </head>
    ';
    echo '<body>';
    echo $oauth_client->run();
    echo '</body>';
    echo '</html>';
?>
