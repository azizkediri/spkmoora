<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Data Diri</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Nilai</a>
    </li>
  </ul>

<?php
$id_alternatif = $_GET['id_alternatif'];
$sql = "SELECT * FROM tabel_alternatif WHERE id_alternatif = $id_alternatif";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form class="form-horizontal style-form" method="POST" action="pages/alternatif/aksi_edit.php?id_alternatif=<?=$id_alternatif?>">
  <!-- Tab panes -->
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Data Diri</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label"> Nama </label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="nama" value="<?=$row['nama']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
              <?php
                if($row['jenis_kelamin']=='L'){
                    echo "<input type='radio' class='form-check-input' id='radio1' name='jenis_kelamin' value='L' checked> Laki - Laki";
                }else {
                    echo "<input type='radio' class='form-check-input' id='radio1' name='jenis_kelamin' value='L' > Laki - Laki";
                }
              ?>
                
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
              <?php
                if($row['jenis_kelamin']=='P'){
                    echo "<input type='radio' class='form-check-input' id='radio2' name='jenis_kelamin' value='P' checked> Perempuan";
                }else {
                    echo "<input type='radio' class='form-check-input' id='radio2' name='jenis_kelamin' value='P' > Perempuan";
                }
              ?>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat </label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment" name="alamat"><?=$row['alamat']?></textarea>
          </div>
        </div>      
    </div>
   <div id="menu1" class=" tab-pane fade">
      <h3>Nilai</h3>
        
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
            <button type="submit" class="btn btn-theme03">Update</button>
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