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
    }
?>