<?php

class KaryawanController extends ControllerBase
{

    public function indexAction()
    {
    	$data_karyawan = Karyawan::find();
   		$this->view->data_karyawan=$data_karyawan;
    }

	    public function createAction()
	   {
	   	$data_karyawan = Karyawan::find();
   		$this->view->data_karyawan=$data_karyawan;
	  $karyawan = new Karyawan();
	  $karyawan->nik = $this->request->getPost("nik");
	  $karyawan->nama_lengkap = $this->request->getPost("nama_lengkap");
	  $karyawan->alamat = $this->request->getPost("alamat");
	  if (!$karyawan->save()) {
	    echo "Gagal Disimpan";
	  echo "<br><a href='../Karyawan'>Kembali</a>";
	  }
	  else
	  {
	  echo "Data Berhasil Disimpan";
	  echo "<br><a href='../Karyawan'>Kembali</a>";
	  }
	   
	   }

	   public function deleteAction($nik)
    {
        $conditions = ['nik'=>$nik];
        $karyawan = Karyawan::findFirst([
            'conditions' => 'nik=:nik:',
            'bind' => $conditions,
        ]);
        if ($karyawan->delete() === false) {
            $messages = $karyawan->getMessages();
            foreach ($messages as $message) {
                $this->flash->error($message);
            }
        } else {
            return $this->response->redirect('Karyawan');
        }
    }

    public function editAction($nik)
    {
        $conditions = ['nik'=>$nik];
        $karyawan = Karyawan::findFirst([
            'conditions' => 'nik=:nik:',
            'bind' => $conditions,
        ]);
        $this->view->title = "Phalcon - Karyawan";
        $this->view->Karyawan = $karyawan;

        if ($this->request->isPost()) {
            $nik = $this->request->get('nik');
            $nama_lengkap = $this->request->get('nama_lengkap');
            $alamat = $this->request->get('alamat');

            $karyawan->nama_lengkap = $nama_lengkap;
            $karyawan->alamat = $alamat;

            if ($karyawan->save()) {
                return $this->response->redirect('Karyawan');
            } else {
                $messages = $karyawan->getMessages();
                foreach ($messages as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }

}

