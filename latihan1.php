<<<<<<< HEAD
<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang...Selamat Belajar Web Programming";
    }
    public function penjumlahan($n1,$n2)
    {
        $this->load->model('Model_latihan1');
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1,$n2);

        $this->load->view('View_latihan1',$data);
    }
}
=======
<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang...Selamat Belajar Web Programming";
    }
    public function penjumlahan($n1,$n2)
    {
        $this->load->model('Model_latihan1');
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1,$n2);

        $this->load->view('View_latihan1',$data);
    }
}
>>>>>>> 1dd44a96e64c9327c4ac01507c1b2f866a272780
