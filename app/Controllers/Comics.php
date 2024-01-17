<?php

namespace App\Controllers;

use App\Models\ComicModel;

class Comics extends BaseController
{
    protected $comicModel;
    public function __construct()
    {
        $this->comicModel = new ComicModel();
    }

    public function index()
    {
        $comic = $this->comicModel->findAll();

        $data = [
            'title' => 'Comic',
            'comic' => $comic
        ];
        // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM comic");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }


        return view('comic/index', $data);
    }
}
