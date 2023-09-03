// application/controllers/Admin.php

class Admin1 extends CI_Controller {

    public function tambah_satuan() {
        if ($this->input->post()) {
            $data = array(
                'id_barang' => $this->input->post('id_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'stock_barang' => $this->input->post('stock_barang')
            );
            $this->Satuan_model->insertSatuan($data);
            redirect('admin/tabel_satuan');
        } else {
            $this->load->view('tambah_satuan'); // Create the view for adding data
        }
    }
}