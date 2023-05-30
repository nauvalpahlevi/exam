<html>
    <head>
        <title>UTS PEMROGRAMAN WEB 2 (43A87006220086)</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Matkul</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Bobot</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    function getGrade($nilai){
                        if($nilai >=81 && $nilai <= 100 ){
                            $grade = "A";
                        }else if($nilai >=66 && $nilai <=80){
                            $grade = "B";
                        }else if($nilai >=56 && $nilai <= 65){
                            $grade = "C";
                        }else if($nilai >= 46 && $nilai <= 55){
                            $grade = "D";
                        }else{
                            $grade = "E";
                        }
                        return $grade;
                    }

                    function getBobot($grade){
                        if($grade == "A"){
                            $bobot = "4";
                        }else if($grade == "B"){
                            $bobot = "3";
                        }else if($grade == "C"){
                            $bobot = "2";
                        }else if($grade == "D"){
                            $bobot= 1;
                        }else{
                            $bobot = 0;
                        }
                        return $bobot;
                    }
                    
                    $nomor = 1;
                    foreach($mahasiswa as $Mahasiswa){
                        $grade = getGrade($Mahasiswa['hasil_nilai']);
                        $bobot = getBobot($grade);
                ?>
                <tr>
                    <td ><?=$nomor?></td>
                    <td><?=$Mahasiswa['nim']?></td>
                    <td><?=$Mahasiswa['nama']?></td>
                    <td><?=$Mahasiswa['matkul']?></td>
                    <td><?=$Mahasiswa['sks']?></td>
                    <td><?=$Mahasiswa['hasil_nilai']?></td>
                    <td><?=getGrade($Mahasiswa['hasil_nilai'])?></td>
                    <td><?= $bobot?></td>

                </tr>
                <?php  $nomor++;} ?>
            </tbody>
</table>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>          
    </body>
</html>

