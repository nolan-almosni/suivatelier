<?php

    Class Participation{
        private $atelier;
        private $client;
        private $dateInscription;

        /**
         * Get the value of atelier
         */ 
        public function getAtelier()
        {
                return $this->atelier;
        }

        /**
         * Set the value of atelier
         *
         * @return  self
         */ 
        public function setAtelier($atelier)
        {
                $this->atelier = $atelier;

                return $this;
        }

        /**
         * Get the value of client
         */ 
        public function getClient()
        {
                return $this->client;
        }

        /**
         * Set the value of client
         *
         * @return  self
         */ 
        public function setClient($client)
        {
                $this->client = $client;

                return $this;
        }

        /**
         * Get the value of dateInscription
         */ 
        public function getDateInscription()
        {
                return $this->dateInscription;
        }

        /**
         * Set the value of dateInscription
         *
         * @return  self
         */ 
        public function setDateInscription($dateInscription)
        {
                $this->dateInscription = $dateInscription;

                return $this;
        }
    }

?>