<?php

use Google\Service\Gmail;

    class GrahamGmail {
        private $client;

        public function __construct($client)
        {
            $this->client = $client;
        }

        public function read_labels() {
            $service = new Gmail($this->client);
            $user = 'me';
            $results = $service->users_labels->listUsersLabels($user);

            if (count($results->getLabels()) == 0) {
                print "No labels found.\n";
            } else {
                print "Labels:\n";
                foreach ($results->getLabels() as $label) {
                    printf("- %s\n", $label->getName());
                }
            }
        }
    }
?>