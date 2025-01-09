<?php

use Google\Service\Gmail;

    class GrahamGmail {
        private $client;

        public function __construct($client)
        {
            $this->client = $client;
        }

        public function read_labels() {
            $labelsHTML = '';

            $service = new Gmail($this->client);
            $user = 'me';
            $results = $service->users_labels->listUsersLabels($user);

            if (count($results->getLabels()) == 0) {
                $labelsHTML.="<p>No labels found.</p>";
            } else {
                $labelsHTML.="<p>Labels</p>";
                foreach ($results->getLabels() as $label) {
                    $labelsHTML.="<p>".$label->getId()."</p>";
                }
            }

            return $labelsHTML;
        }

        public function list_messages() {
            $service = new Gmail($this->client);
            $user = 'me';
            $pageToken = NULL;
            $messages = array();
            $opt_params = array();
            $i=0;
            $opt_params['labelIds'] = array('Label_8449633831705723059');

            do {
                if ($i==5) break;
                $i++;

                try {
                    if ($pageToken) {
                        $opt_params['pageToken'] = $pageToken;
                    }
                    $messages_response = $service->users_messages->listUsersMessages($user, $opt_params);
                    if ($messages_response->getMessages()) {
                        $messages = array_merge($messages, $messages_response->getMessages());
                        $pageToken = $messages_response->getNextPageToken();
                    }
                } catch (Exception $e) {
                    print 'An error occured: ' . $e->getMessage();
                }
            } while ($pageToken);

            $j = 0;
            foreach ($messages as $message) {
                $message_get_res = $service->users_messages->get($user, $message->getId());
                $msg_snippet = strtoupper($message_get_res->getSnippet());
                $keywords = array("DEPOSIT", "BINANCE PAY", "WITHDRAWAL", "PUNTOS DE VENTA", "PAGO A UN", "PAGO DE SERVICIOS");
                $is_transaction = false;

                foreach ($keywords as $keyword) {
                    if (str_contains($msg_snippet, $keyword)) {
                        $is_transaction = true;
                    };
                }

                if ($is_transaction) {
                    $message_parts = $message_get_res->payload->parts;
                    if (count($message_parts) > 0) {
                        $message_data = $message_parts[1]->body->data;
                    }
                    else {
                        $message_data = $message_get_res->payload->body->data;
                    }
    
                    $decoded_email = str_replace("-", "+", $message_data);
                    $decoded_email = str_replace("_", "/", $decoded_email);
                    echo base64_decode($decoded_email);
                }     

                $j++;
                if ($j == 50) { break; }
            }
        }
    }
?>