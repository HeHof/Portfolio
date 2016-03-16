<?php

class Products_Model extends Model {

   public function __construct(){
      parent::__construct();
   }

   /**
   * Gibt die letzten 20 Einträge im Archiv zurück.
   * @return array Liste aus Produkten mit id, timestamp, name, url, image und price
   */
   public function all() {
      return $this->_db->select('SELECT * FROM products ORDER BY id DESC LIMIT 0, 20');
   }

   public function delete($id) {
      return $this->_db->delete('DELETE FROM products WHERE id = $id');
   }

   public function add($postdata) {
      return $this->_db->insert($table,$postdata)
   }




   ; 

}