<?php



class Jurnal_model extends CI_Model
{



    public function getAll()
    {
        return $this->db->get('jurnal')->result_array();
    }
    public function tambahDataJurnal()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "uraian" => $this->input->post('uraian', true),
            "ref" => $this->input->post('ref', true),
            "debet" => $this->input->post('debet', true),
            "kredit" => $this->input->post('kredit', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $this->db->insert('jurnal', $data);
        redirect('jurnal');
    }
    public function hapus()
    {
        return $this->db->empty_table('jurnal');
    }
}
