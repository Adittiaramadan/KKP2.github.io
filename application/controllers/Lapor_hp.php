<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Lapor_hp extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor_hp');
         $this->load->model('M_lapor');

  			 }




        public function telegram($id_pelapor){
      
           $no_telepon = $this->input->post('no_telepon');
          $uraian = json_encode($this->input->post('uraian_pengaduan'));
          $tanggal = date("Y-m-d");
            $this->telegram_add($id_pelapor,$no_telepon,$tanggal,$uraian);
         }
        public function tambah_hp(){
            $cek= $this->M_lapor_hp->add();
            if($cek>0){
              echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Mengirim Pengaduan');window.location.href='hp/detail/".$cek."';</script>");

            }else{
              echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Mengirim Pengaduan');window.location.href='hp';</script>");

       	   }
         }
        public function tambah_dekstop(){
            $cek= $this->M_lapor_hp->add();
            if($cek>0){
                 $this->telegram($cek);
                echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Mengirim Pengduan');window.location.href='umum_cek?id=".$cek."';</script>");
                   
            }else{
              echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Mengirim Pengaduan');window.location.href='beranda';</script>");

       	   }
        }
        public function tambah(){
            $cek= $this->M_lapor_hp->add2();
            if($cek>0){
              echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Mengirim Pengduan');window.location.href='detail_lapor_admin?id=".$cek."';</script>");
            }else{
              echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Mengirim Pengaduan');window.location.href='admin_lapor';</script>");
       	   }
        }

        public function hapus(){
            $id =$this->input->get('id');
            $id2 =$this->input->get('id2');
            $cek= $this->M_lapor->hapus($id,$id2);
            if($cek>0){
              echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Hapus Pengduan');window.location.href='../data';</script>");
            }else{
            echo ("<script LANGUAGE='JavaScript'>window.alert('gagal Hapus Pengduan');window.location.href='data';</script>");
       	    }
        }

        public function telegram_add($id_pelapor,$no_telpon,$tanggal,$uraian){

          $token = "1815887128:AAEQx8o7BiRFffnxi85sDZp-uH1zcbL2ecU"; // token bot
          $chat_id = '1313828717';

          $data = [
                  'text' =>"Pengaduan!%0ANo%20%20%20%20%20%20%20%20%20%20%20:%20$id_pelapor %0ATanggal%20%20:%20$tanggal  %0ANo.HP%20%20%20%20%20%20%20%20%20%20%20:$no_telpon%0AUraian%20%20%20%20%20:$uraian%0A%20%20%20%20%20",
                  'chat_id' => '1313828717'  //contoh bot, group id -442697126
            ];


 

 $request = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$data['text']}";
  echo $request;
 $sendToTelegram = fopen($request,"r");

          }





   } 
?>
