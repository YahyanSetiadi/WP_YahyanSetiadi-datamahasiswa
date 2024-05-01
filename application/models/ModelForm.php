<?php 
class ModelForm extends CI_Model
{
    public $prodi, $biaya_kuliah;

    public function getBiaya($prodi=null)
    {
        $this->prodi=$prodi;
        if($this->prodi == "Teknologi Informasi")
            {$this->biaya_kuliah=4500000;}
        elseif($this->prodi == "Sistem Informasi")
            {$this->biaya_kuliah=3500000;}
        elseif($this->prodi == "Akuntansi")
            {$this->biaya_kuliah=2500000;}
        elseif($this->prodi == "Ilmu Komunikasi")
            {$this->biaya_kuliah=3000000;}

        return $this->biaya_kuliah;
        
    }
}
?>