<?php
    class Film{
        private string $_titre;
        private DateTime $_dateSortie;
        private int $_duree;
        private Realisateur $_realisateur;
        private string $_synopsis;
        private string $_genreCinematographique;
        private array $_acteursFilm = [];

        /* Méthode __construct de la classe */
        public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, string $synopsis, string $genreCinematographique, array $acteursFilm){
            $this->_titre = $titre;
            $this->_dateSortie = new DateTime($dateSortie);
            $this->_realisateur = $realisateur;
            $this->_synopsis = $synopsis;
            $this->_genreCinematographique = $genreCinematographique;
            array_push($this->_acteursFilm, $acteursFilm);//Il y a plusieurs acteurs dans le film : on le sait
            for($i=0; $i < count($this->_acteursFilm); $i++){
                $this->_acteursFilm[$i]->setFilmsParticipes($this);//pour chaque acteurs du film, on met le film dans l'array $_filmsParticipes de l'acteur
            }
            $this->_realisateur->setFilmsRealises($this);
        }

        /* Getter et Setter du titre du film*/
        public function getTitre() : string{
            return $this->_titre;
        }
        public function setTitre(string $titre){
            $this->_titre = $titre;
        }

        /* Getter et Setter de la date de sortie du film */
        public function getDateSortie() : DateTime{
            return $this->_dateSortie;
        }
        public function setDateSortie(string $dateSortie){
            $this->_dateSortie = new DateTime ($dateSortie);
        }

        /* Getter et Setter de la duree du film */
        public function getDuree() : int{
            return $this->_duree;
        }
        public function setDuree(int $duree){
            $this->_duree = $duree;
        }

        /* Getter et Setter du realisateur du film */
        public function getRealisateur() : Realisateur{
            return $this->_realisateur;
        }
        public function setRealisateur(Realisateur $realisateur){
            $this->_realisateur = $realisateur;
        }

        /* Getter et Setter du synopsis du film */
        public function getSynopsis() : string{
            return $this->_synopsis;
        }
        public function setSynopsis(string $synopsis){
            $this->_synopsis = $synopsis;
        }

        /* Getter et Setter du genre cinematographique du film */
        public function getGenreCinematograpique() : string{
            return $this->_genreCinematographique;
        }
        public function setGenreCinematographique(string $genreCinematographique){
            $this->_genreCinematographique = $genreCinematographique;
        }

        /* Getter et Setter des acteurs du film */
        public function getActeursFilm(){
            return $this->_acteursFilm;
        }
        public function setActeursFilm(Acteur $acteursFilm){
            array_push($this->_acteursFilm, $acteursFilm);
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_titre;
        }
    }
?>