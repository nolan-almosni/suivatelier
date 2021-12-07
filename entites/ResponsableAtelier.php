<?php

    Class ResponsableAtelier{
        private $numResponsable;
        private $nomConnexion;
        private $nom;
        private $prenom;
        private $ateliers;
        

        public function progAtelier($atelier){
            
        }
        
        /**
         * Get the value of numResponsable
         */ 
        public function getNumResponsable()
        {
                return $this->numResponsable;
        }

        /**
         * Set the value of numResponsable
         *
         * @return  self
         */ 
        public function setNumResponsable($numResponsable)
        {
                $this->numResponsable = $numResponsable;

                return $this;
        }

        /**
         * Get the value of nomConnexion
         */ 
        public function getNomConnexion()
        {
                return $this->nomConnexion;
        }

        /**
         * Set the value of nomConnexion
         *
         * @return  self
         */ 
        public function setNomConnexion($nomConnexion)
        {
                $this->nomConnexion = $nomConnexion;

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
         * Get the value of ateliers
         */ 
        public function getAteliers()
        {
                return $this->ateliers;
        }

        /**
         * Set the value of ateliers
         *
         * @return  self
         */ 
        public function setAteliers($ateliers)
        {
                $this->ateliers = $ateliers;

                return $this;
        }
    }

?>