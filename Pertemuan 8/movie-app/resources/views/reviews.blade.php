@extends('layout.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sang pemimpi</td>
                        <td>Andrea hirata</td>
                        <td>9.0</td>
                        <td>Dalam novel ini, Andrea mengeksplorasi hubungan persahabatannya dengan dua anak yatim piatu, Arai Ichsanul Mahidin dan Jimbron, serta kekuatan mimpi yang dapat membawa Andrea dan Arai melanjutkan studi ke Sorbonne, Paris, Prancis</td>
                        <td>2006-07-25</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mencuri Raden Saleh</td>
                        <td>Angga Dwimas</td>
                        <td>9.2</td>
                        <td>Sekelompok mahasiswa berencana untuk mencuri lukisan bersejarah. Lukisan tersebut adalah Penangkapan Pangeran Diponegoro karya Raden Saleh, yang berada di Istana Presiden dan tak ternilai harganya. Masing-masing memiliki peran dan tugas yang berbeda dalam menjalankan rencana pencurian ini.</td>
                        <td>2018-06-21</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Merantau</td>
                        <td>Gareth Evans</td>
                        <td>8.9</td>
                        <td>Di Minangkabau, Sumatra Barat, Yuda (Iko Uwais), seorang pendekar silat Minangkabau aliran Harimau dalam persiapan akhir untuk memulai perantauannya. Ia harus meninggalkan keluarganya, ibu tercinta, Wulan (Christine Hakim), dan udanya (kakak dalam bahasa Minang), Yayan (Donny Alamsyah), kenyamanan, keindahan kampung halamannya, dan mencari eksistensi dirinya di keserabutan kota Jakarta</td>
                        <td>2009-08-06</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Laskar pelangi</td>
                        <td>Riri riza</td>
                        <td>9.3</td>
                        <td>Laskar Pelangi adalah sebuah film drama Indonesia tahun 2008 yang disutradarai oleh Riri Riza dari skenario yang ditulis oleh Salman Aristo bersama Riri dan Mira Lesmana berdasarkan novel berjudul sama karya Andrea Hirata. Film ini diproduksi oleh Miles Films bersama Mizan Productions dan SinemArt.</td>
                        <td>2008-09-12</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Air terjun pengantin</td>
                        <td>Rizal Mantovani</td>
                        <td>8.7</td>
                        <td>Film diawali dengan dukun ilmu hitam bertopeng yang menculik seorang wanita untuk dijadikan pengantinnya. Sang dukun dikejar warga setempat hingga ia terpojok ke sebuah air terjun. Karena wanita disebelahnya terus memberontak, sang dukun melempar wanita itu ke air terjun. Lalu, sang dukun menyusulnya jatuh, dan dukun yang masih hidup itu melihat wanitanya yang sudah meninggal dan frustasi, lalu membunuh seluruh warga.</td>
                        <td>2009-12-03</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
