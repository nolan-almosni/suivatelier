<?php

    class Client{
        private $numClient;
        private $civilite;
        private $nom;
        private $prenom;
        private $dateNaissance;
        private $adresseMail;
        private $codePostale;
        private $ville;
        private $numeroTelephone;

        

        /**
         * Get the value of numClient
         */ 
        public function getNumClient()
        {
                return $this->numClient;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumClient($num)
        {
                $this->numClient = $num;

                return $this;
        }

        /**
         * Get the value of civilite
         */ 
        public function getCivilite()
        {
                return $this->civilite;
        }

        /**
         * Set the value of civilite
         *
         * @return  self
         */ 
        public function setCivilite($civilite)
        {
                $this->civilite = $civilite;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of dateNaissance
         */ 
        public function getDateNaissance()
        {
                return $this->dateNaissance;
        }

        /**
         * Set the value of dateNaissance
         *
         * @return  self
         */ 
        public function setDateNaissance($dateNaissance)
        {
                $this->dateNaissance = $dateNaissance;

                return $this;
        }

        /**
         * Get the value of adresseMail
         */ 
        public function getAdresseMail()
        {
                return $this->adresseMail;
        }

        /**
         * Set the value of adresseMail
         *
         * @return  self
         */ 
        public function setAdresseMail($adresseMail)
        {
                $this->adresseMail = $adresseMail;

                return $this;
        }

        /**
         * Get the value of codePostale
         */ 
        public function getCodePostale()
        {
                return $this->codePostale;
        }

        /**
         * Set the value of codePostale
         *
         * @return  self
         */ 
        public function setCodePostale($codePostale)
        {
                $this->codePostale = $codePostale;

                return $this;
        }

        /**
         * Get the value of ville
         */ 
        public function getVille()
        {
                return $this->ville;
        }

        /**
         * Set the value of ville
         *
         * @return  self
         */ 
        public function setVille($ville)
        {
                $this->ville = $ville;

                return $this;
        }

        /**
         * Get the value of numeroTelephone
         */ 
        public function getNumeroTelephone()
        {
                return $this->numeroTelephone;
        }

        /**
         * Set the value of numeroTelephone
         *
         * @return  self
         */ 
        public function setNumeroTelephone($numeroTelephone)
        {
                $this->numeroTelephone = $numeroTelephone;

                return $this;
        }
    }

    

?>