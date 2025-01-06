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
                    $labelsHTML.="<p>".$label->getName()."</p>";
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
                echo 'Message with ID: ' . $message->getId() . '<br/>';
                $message_get_res = $service->users_messages->   get($user, $message->getId());
                echo "<pre>".var_export($message_get_res->payload->parts[1]->body->data, true)."</pre>";
                $j++;
                if ($j == 10) { break; }
            }

            return $messages;
        }
    }
?>