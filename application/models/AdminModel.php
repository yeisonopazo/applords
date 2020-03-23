<?php

class AdminModel extends CI_Model {

    function getCacerias() {
        return $this->db->get("caceria")->result();
    }

    function getCastillos() {
        return $this->db->get("castillo")->result();
    }

    function getFDG() {
        return $this->db->get("fdg")->result();
    }

    function getCacerias2() {
        $this->db->select("c.idc, c.rango, c.nombre, c.idlider,"
                . "h.idcaceria, h.lvl1, h.lvl2, h.lvl3, h.lvl4, h.lvl5, h.fechacaceria, h.fecharegistro");
        $this->db->from("caceria h");
        $this->db->join("castillo c", "c.idc=h.idcastillo");
        return $this->db->get()->result();
    }

    function insertarCaceria($idcastillo, $lvl1, $lvl2, $lvl3, $lvl4, $lvl5, $fechacaceria, $fecharegistro, $fechamodificacion) {
        $datos = array("idcastillo" => $idcastillo,
            "lvl1" => $lvl1,
            "lvl2" => $lvl2,
            "lvl3" => $lvl3,
            "lvl4" => $lvl4,
            "lvl5" => $lvl5,
            "fechacaceria" => $fechacaceria,
            "fecharegistro" => $fecharegistro,
            "fechamodificacion" => $fechamodificacion
        );
        $this->db->insert("caceria", $datos);
    }

    function insertarCastillo($rango, $inombre, $idlider) {
        $datos = array("rango" => $rango,
            "inombre" => $inombre,
            "idlider" => $idlider
        );
        $this->db->insert("castillo", $datos);
//        return $this->db->insert_id();
    }

    function getFDG2() {
        $this->db->select("c.idc, c.nombre,"
                . "f.idcastillo, f.puntaje, f.fecha");
        $this->db->from("castillo c");
        $this->db->join("fdg f", "f.idcastillo=c.idc");
        return $this->db->get()->result();
    }

    function getCastillos2() {
        $this->db->select("c.idc, c.rango, c.nombre, c.idlider,"
                . "l.idlider, l.nombre nombrel,");
        $this->db->from("castillo c");
        $this->db->join("lider l", "l.idlider=c.idlider");
        return $this->db->get()->result();
    }

}
