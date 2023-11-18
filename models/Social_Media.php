<?php
    class Socialmedia extends conectar{

        public function get_socialMedia(){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM social_media WHERE est=1";
            $sql=$social->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_socialMedia_con_parametros($socmed_id){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM social_media WHERE socmed_id=?";
            $sql=$social->prepare($sql);
            $sql->binValue(1,$socmed_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_socialMedia($socmed_icono,$socmed_url){
            $social = parent::conexion();
            parent::set_names();
            $sql="INSERT INT social_media (socmed_id,socmed_icono,socmed_url,est) VALUES(NULL,?,?,1)";
            $sql->binVAlues(1, $socmed_icono);
            $sql->binValues(2, $socmed_url);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_socialMedia($socmed_id,$socmed_icono,$socmed_url){
            $social = parent::conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                    SET
                        socmed_icono = ?,
                        socmed_url = ?
                    WHERE
                        socmed_id = ?";
            $sql=$social->prepare($sql);
            $sql->binValue(1,$socmed_icono);
            $sql->binValue(2,$socmed_url);
            $sql->binValue(3,$socmed_id);
            $sql->execute();
            return $resultado=sql->fetchAll();
        }

        public function delete_socialMedia($socmed_id){
            $social = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est = 0 WHERE socmed_id=?";
            $sql=$social->prepare($sql);
            $sql->binValue();
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }   