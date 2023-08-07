<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Data Diri</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Nilai</a>
    </li>
  </ul>
<form class="form-horizontal style-form" method="POST" action="pages/alternatif/aksi_tambah.php">
  <!-- Tab panes -->
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Data Diri</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama </label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="nama">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="jenis_kelamin" value="L" checked> Laki - Laki
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="jenis_kelamin" value="P"> Perempuan
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat </label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment" name="alamat"></textarea>
          </div>
        </div>      
    </div>
    <div id="menu1" class=" tab-pane fade">
      <h3>Nilai</h3>


        <?php 
        //-- konfigurasi database
// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
// $dbname = 'db_moora';
// //-- koneksi ke database server dengan extension mysqli
// $db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
// //-- hentikan program dan tampilkan pesan kesalahan jika koneksi gagal
// if ($db->connect_error) {
//    die('Connect Error ('.$db->connect_errno.')'.$db->connect_error);
// }
//         // PROSES PENGALMBILAN KRITERIA DARI DB

//         $sql = 'SELECT * FROM tabel_kriteria';
//         $result = $db->query($sql);
//         //-- menyiapkan variable penampung berupa array
//         $kriteria=array();
//         //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
//         foreach ($result as $row) {
//           $kriteria[$row['id_kriteria']]=array($row['id_kriteria'],$row['kriteria'],$row['type'],$row['bobot']);
//         }
//         $i=1;
//        foreach($kriteria as $id_kriteria =>$value){
//         // echo $kriteria[$id_kriteria][0]." ".$kriteria[$id_kriteria][1]." = ".$kriteria[$id_kriteria][2]."<br>";
        
//        if($kriteria[$id_kriteria][0]==1){
//         echo '<div class="form-group">
//         <label class="col-sm-2 col-sm-2 control-label"> C1 Penghasilan </label>
//         <div class="col-sm-6">
//           <select class="form-control" name="penghasilan">
//               <option value="11000000">Lebih dari Rp. 10.000.000</option>
//               <option value="5100000">lebih Rp. 5.000000 dan kurang dari 10.000.000</option>
//               <option value="3600000">lebih Rp. 3.500000 dan kurang dari 5.000.000</option>
//               <option value="1100000">lebih Rp. 1.000000 dan kurang dari 3.500.000</option>
//               <option value="900000">kurang dari 1.000.000</option>
//           </select>
//         </div>
//       </div>';
//        }else{
//         echo '
        
//         <div class="form-group">
//           <label class="col-sm-2 col-sm-2 control-label"> C'.$i.' '. $kriteria[$id_kriteria][1].'</label>
//           <div class="col-sm-10">
//             <div class="form-check-inline">
//               <label class="form-check-label" for="radio1">
//                 <input type="radio" class="form-check-input" id="radio1" name="'.$kriteria[$id_kriteria][0].'" value="ya" checked> Ya
//               </label>
//               <label class="form-check-label" for="radio2">
//                 <input type="radio" class="form-check-input" id="radio2" name="'.$kriteria[$id_kriteria][0].'" value="tidak"> Tidak
//               </label>
//             </div>
//           </div>
//         </div>
        
//         ';
// $i++;
//        }
// }; 


        ?>
        <!-- <div class="form-group">
          <div class="col-sm-12" style="text-align: center;">
            <button type="submit" class="btn btn-theme03">Masukan</button>
            <button type="reset" class="btn btn-theme04">Reset</button>
          </div>
        </div> -->


      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C1 Penghasilan </label>
          <div class="col-sm-6">
            <select class="form-control" name="penghasilan">
                <option value="11000000">Lebih dari Rp. 10.000.000</option>
                <option value="5100000">lebih Rp. 5.000000 dan kurang dari 10.000.000</option>
                <option value="3600000">lebih Rp. 3.500000 dan kurang dari 5.000.000</option>
                <option value="1100000">lebih Rp. 1.000000 dan kurang dari 3.500.000</option>
                <option value="900000">kurang dari 1.000.000</option>
            </select>
          </div>
        </div>
      
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C2 Sehat Jasmani dan Rohani</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="sehat" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="sehat" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C3 Berkelakuan baik dan jujur</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="jujur" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="jujur" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C4 Permasalahan dengan Lembaga Keuangan lain</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="permasalahan" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="permasalahan" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>

                <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C5 Status Anggota BMT</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="status" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="status" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C6 Usia Lebih dari 59</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="usia" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="usia" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>
        

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C7 Warga Negara Indonesia</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="wni" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="wni" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C8 Berdomisili di Bojonegoro</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="berdomisili_di_bojonegoro" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="berdomisili_di_bojonegoro" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C9 Bersedia menyerahkan jaminan</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="jaminan" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="jaminan" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> C10 Bersedia disurvei</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="bersedia_di_survei" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="bersedia_di_survei" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12" style="text-align: center;">
            <button type="submit" class="btn btn-theme03">Masukan</button>
            <button type="reset" class="btn btn-theme04">Reset</button>
          </div>
        </div>
      
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>

  </form>