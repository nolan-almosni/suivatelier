<?php

    Class Atelier{
        private $numAtelier;
        private $dateEnregistrement;
        private $dateHeureProgramme;
        private $duree;
        private $nbplace;
        private $theme;
        private $responsable;

        //public function __construct()

        /**
         * Get the value of numAtelier
         */ 
        public function getNumAtelier()
        {
                return $this->numAtelier;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumAtelier($num)
        {
                $this->numAtelier = $num;

                return $this;
        }

        /**
         * Get the value of dateEnregistrement
         */ 
        public function getDateEnregistrement()
        {
                return $this->dateEnregistrement;
        }

        /**
         * Set the value of dateEnregistrement
         *
         * @return  self
         */ 
        public function setDateEnregistrement($dateEnregistrement)
        {
                $this->dateEnregistrement = $dateEnregistrement;

                return $this;
        }

        /**
         * Get the value of dateHeureProgramme
         */ 
        public function getDateHeureProgramme()
        {
                return $this->dateHeureProgramme;
        }

        /**
         * Set the value of dateHeureProgramme
         *
         * @return  self
         */ 
        public function setDateHeureProgramme($dateHeureProgramme)
        {
                $this->dateHeureProgramme = $dateHeureProgramme;

                return $this;
        }

        /**
         * Get the value of duree
         */ 
        public function getDuree()
        {
                return $this->duree;
        }

        /**
         * Set the value of duree
         *
         * @return  self
         */ 
        public function setDuree($duree)
        {
                $this->duree = $duree;

                return $this;
        }

        /**
         * Get the value of nbplace
         */ 
        public function getNbplace()
        {
                return $this->nbplace;
        }

        /**
         * Set the value of nbplace
         *
         * @return  self
         */ 
        public function setNbplace($nbplace)
        {
                $this->nbplace = $nbplace;

                return $this;
        }

        /**
         * Get the value of theme
         */ 
        public function getTheme()
        {
                return $this->theme;
        }

        /**
         * Set the value of theme
         *
         * @return  self
         */ 
        public function setTheme($theme)
        {
                $this->theme = $theme;

                return $this;
        }

        /**
         * Get the value of responsable
         */ 
        public function getResponsable()
        {
                return $this->responsable;
        }

        /**
         * Set the value of responsable
         *
         * @return  self
         */ 
        public function setResponsable($responsable)
        {
                $this->responsable = $responsable;

                return $this;
        }
    }

?>