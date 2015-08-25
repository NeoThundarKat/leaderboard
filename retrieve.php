<?php
    class database {

        protected static $c;
        protected $s;
        public function __construct() {
            static::$c = new PDO('mysql:host=localhost;dbname=leaderboard','root','ASATm4PeyGxf');
            static::$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function p($query) {
            $this->s = static::$c->prepare($query);
            $this->s->setFetchMode(PDO::FETCH_ASSOC);
        }
        public function e($data = array()) {
            $this->s->execute($data);
        }

        public function select($query) {
            $this->p($query);
            $this->e();
            return $this->s->fetchAll();
        }
    }

    $db = new database();

    echo json_encode($db->select("SELECT * FROM `tmp` ORDER BY score DESC"));
?>
