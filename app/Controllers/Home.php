<?php

namespace App\Controllers;
use App\Models\TugasModel;

class Home extends BaseController
{
    // fungsi index
    public function index()
    {
        $tugasModel = new TugasModel(); //mengambil data TugasModel
        $data['tugas'] = $tugasModel->findAll();
        echo view('header'); //menanpilkan header yg ada di view
        echo view('sidebar'); //menampilkan sidebar yg ada di view
        echo view('index', $data); //menampilkan index serta mengirim $data ke index
        echo view('footer'); //menampilkan footer yg ada di view
    }

    // fungsi tambah
    public function tambah()
    {
        echo view('header');
        echo view('sidebar');
        echo view('tambah');
        echo view('footer');
    }

    // fungsi tambah_tugas
    public function tambah_tugas()
    {
        $Tugasmodel = new TugasModel();
        $data = [
            'task_name' => $this->request->getPost('name'), // mengambil data yg di kirim melalui post
            'status' => 'belum',
            'priority' => $this->request->getPost('priority'), 
            'created_at' => date('Y-m-d'),
            'deadline' => $this->request->getPost('deadline'),
        ];

        
        if ($Tugasmodel->insert($data)){  // untuk mengirim data pada database
            return redirect()->to('/')->with('success','Tugas Berhasil Ditambahkan');
        } else {
            return redirect()->to('/')->with('error','Tugas Gagal Ditambahkan');
        }
    }

    public function update_status($task_id) // fungsi update status
    {
        $TugasModel = new TugasModel();
        $tugas = $TugasModel->find($task_id);

        if ($TugasModel->update($task_id, ['status' => 'selesai'])){ // mengedit/mengubah data status pada database
            return redirect()->to('/')->with('success','Status tugas berhasil diupdate');
        } else {
            return redirect()->to('/')->with('error', 'Status tugas gagal diupdate');
        }
    }

    // fungsi edit
    public function edit($task_id)
    {
        $tugasModel = new TugasModel();
        $tugas = $tugasModel->find($task_id);
        $data = [
            'tugas' => $tugas
        ];

        echo view('header');
        echo view('sidebar');
        echo view('edit',$data);
        echo view('footer');
    }

    // fungsi update
    public function update($task_id)
    {
        $tugasModel = new TugasModel();

        $data = [
            'task_name' => $this->request->getPost('task_name'),
            'priority' => $this->request->getPost('priority'),
            'deadline' => $this->request->getPost('deadline')
        ];

        if ($tugasModel->update($task_id, $data)) { // untuk mengedit atau mengubah data
            return redirect()->to('/')->with('success', 'Tugas berhasil diupdate');
        } else {
            return redirect()->to('/')->with('error', 'Tugas gagal diupdate');
        }
    }

    // fungsi delete
    public function delete($task_id)
    {
        $tugasModel = new TugasModel();
        
        if ($tugasModel->delete($task_id)){ // untuk menghapus data
            return redirect()->to('/')->with('success', 'Tugas berhasil dihapus');
        } else {
            return redirect()->to('/')->with('error', 'Tugas gagal dihapus');
        }
    }
}