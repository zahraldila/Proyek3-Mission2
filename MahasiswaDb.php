<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class MahasiswaDb extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['biodata'] = $model->findAll();

        return view('list_biodata', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $data['mhs'] = $model->find($nim);

        return view('biodata_detail', $data);
    }

    public function tambah()
    {
        return view('biodata');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIM belum diisi'
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap belum diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin belum dipilih'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal lahir belum diisi'
                ]
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new MahasiswaModel();
        $model->insert([
            'nim'           => $this->request->getPost('nim'),
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir')
        ]);

        return redirect()->to('/biodata');
    }



    public function edit($nim)
    {
        $model = new MahasiswaModel();
        $data['mhs'] = $model->find($nim);

        return view('biodata_edit', $data);
    }

    public function update($nim)
    {
        $model = new MahasiswaModel();
        $model->update($nim, [
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir')
        ]);

        return redirect()->to('/biodata');
    }

    public function delete($nim)
    {
        $model = new MahasiswaModel();
        $model->delete($nim);

        return redirect()->to('/biodata');
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $model = new MahasiswaModel();
        $data['biodata'] = $model->like('nim', $keyword)
                                ->orLike('nama_lengkap', $keyword)
                                ->findAll();

        return view('list_biodata', $data);
    }

}
