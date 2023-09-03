// application/models/Satuan_model.php

class Satuan_model extends CI_Model {

    public function getSatuanData() {
        $this->db->insert('tb_satuan', $data);
        return $this->db->select('id_barang, nama_barang, stock_barang')
                        ->from('tb_satuan')
                        ->get()
                        ->result();
    }
}
