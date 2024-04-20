<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" >
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
<style>
  
  form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
  }
  
  .txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 30px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
  }
  
  .txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
  }
  
  .txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0px;
    height: 2px;
    background: #2691d9;
    transition: .5s;
  }
  

</style>
  
<div style=" position: relative; background: white">
  <div style="width: 100%; height:100%; left: 0px; top: 112px; position: absolute; background: white">
  <table style="margin : 3rem 0; ">
  <tbody>
    <tr>
      <td>
        <div style="padding-left : 5rem;color: black; font-size: 64px; font-family: Newsreader; font-weight: 400; line-height: 76.80px; word-wrap: break-word">Jobs</div>
      </td>
      <td style=" width : 95%;">
        <div style="padding : 0 5%; width : 100%; "><span style="color: black; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 26px; word-wrap: break-word">Temukan pekerjaan yang cocok untuk mu !</span></div>
      </td>
      <td>
        <div id="default" style="padding-left: 16px; padding-right: 16px; padding-top: 9.50px; padding-bottom: 9.50px; left: 1077px; top: 76px;  background: <?=(isset($_GET["sort"]) && ($_GET["sort"]=="asc"||$_GET["sort"]=="desc" )) ? 'white' :  '#426B1F'  ?>; border-radius: 20px; overflow: hidden;  border: 1px #C2C2C2 solid;justify-content: center; align-items: center; display: inline-flex">
          <a style="text-align: center; color:<?=(isset($_GET["sort"]) && ($_GET["sort"]=="asc"||$_GET["sort"]=="desc" )) ?  'black' : 'white' ?>; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 20.80px; word-wrap: break-word ;  text-decoration:none;" href="">Default</a>
        </div>
      </td>
      <td>
        <div id="sort" style="padding-left: 16px; padding-right: 16px; padding-top: 9.50px; padding-bottom: 9.50px; left: 1173px; top: 76px;  background: <?=(isset($_GET["sort"]) && ($_GET["sort"]=="asc"||$_GET["sort"]=="desc" )) ? '#426B1F' : 'white' ?>; border-radius: 20px; overflow: hidden; border: 1px #C2C2C2 solid; justify-content: center; align-items: center; display: inline-flex">
          <a style="text-align: center; color:  <?=(isset($_GET["sort"]) &&($_GET["sort"]=="asc"||$_GET["sort"]=="desc" )) ? 'white' : 'black' ?>; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 20.80px; word-break: unset ; word-wrap: unset; white-space:nowrap; text-decoration:none;" href=""><?=(isset($_GET["sort"]) && $_GET["sort"]=="desc") ? 'Z-A' :  'A-Z'  ?></a>
        </div>
      </td>
      <td style="padding-right:1rem;">
        <div id="available" style="padding-left: 16px; padding-right: 16px; padding-top: 9.50px; padding-bottom: 9.50px; left: 1243px; top: 76px;  background: <?=(isset($_GET["available"]) && $_GET["available"]=="true") ?   '#426B1F' : 'white'  ?>; border-radius: 20px; overflow: hidden; border: 1px #C2C2C2 solid; justify-content: center; align-items: center; display: inline-flex">
          <a style="text-align: center; color:  <?=(isset($_GET["available"]) &&$_GET["available"]=="true") ? 'white' : 'black' ?>; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 20.80px; word-wrap: break-word; white-space:nowrap;  text-decoration:none;" href="">Available</a>
        </div>
      </td>
    </tr>
    <tr >
      <td colspan="5" style="padding-left:5rem; padding-right:1rem;">
        <div style="width:100%; height: 0px;  top: 149px;  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 2px #E6E6E6 solid"></div>
      </td>
    </tr>
  </tbody>
  </table>
  </div>
  <div style="width: 100%; height:auto; left: 0px; top: 0px; position: absolute">
    <div style="position:absolute; display:table-cell; top: 41px; left:5rem; padding-right:10px; align-content : center;" >
        <table>
          <tr>
            <td style="width:auto;">
              <div style=" color: #426B1F; font-size: 32px; font-family: Arial; font-weight: bold;  word-wrap: break-word" ><a href="home" style="text-decoration:none;  color: #426B1F;">Job Finder</a></div>
            </td>
          </tr>
        </table>
      </div>
    <div style="position:absolute; display:table-cell; top: 41px; right:0;  align-content : center;" >
      <table>
        <tr>

          <td style="padding : 0 1rem ;">
            <a style="vertical-align :supper; top: 45.50px; float:left; text-align: center; color: black; font-size: 16px; font-family: Arial; font-weight: 400; line-height: 20.80px; word-wrap: break-word; font-weight:bold; text-decoration:none;" href="home">Home</a></a>
          </td>
          <td style="padding : 0 1rem ;">
            <a style="top: 45.50px; float:left; text-align: center; color: black; font-size: 16px; font-family: Arial; font-weight: 400; line-height: 20.80px; word-wrap: break-word; font-weight:bold; text-decoration:none;" href="job">Jobs </a></div>
          </td>
          <td style="padding : 0 1rem ;">
            <a style="top: 45.50px; float:left; text-align: center; color: black; font-size: 16px; font-family: Arial; font-weight: 400; line-height: 20.80px; word-wrap: break-word; font-weight:bold; text-decoration:none;" href="pengajuan">Pengajuan</a></div>
          </td>
          <td style="padding : 0 1rem ;">
            <a style="top: 45.50px; float:left; text-align: center; color: black; font-size: 16px; font-family: Arial; font-weight: 400; line-height: 20.80px; word-wrap: break-word; font-weight:bold; text-decoration:none;" href="profile">Profile Saya</a></div>
          </td>
          <td>
            <!-- Search bar -->
            <div style="padding-left: 16px; padding-right: 16px;  left: 1243px; top: 76px;  background: white; border-radius: 20px; overflow: hidden; border: 1px #C2C2C2 solid; justify-content: center; align-items: center; display: inline-flex">
                <div class="txt_field">
                  <input type="text" name="name" id="search" required>
                </div>
                <img width="20" id="searchicon" src="images/icon/search.png"/>
              </div>
            </div>         
          </td>
          <td style="padding : 0 1rem ;">
            <div style="padding-left: 23px; padding-right: 23px; padding-top: 13.50px; padding-bottom: 13.50px;  top: 32px; background: #426B1F; border-radius: 15px; overflow: hidden; justify-content: center; align-items: center; display: inline-flex">
              <a style="text-align: center; color: white; font-size: 16px; font-family: Arial; font-weight: 600; line-height: 20.80px; word-wrap: break-word ; text-decoration:none;" href="<?=strtolower($url)?>"><?=$url?></a>
            </div>
          </td>
        </tr>
      </table>

    </div>

  </div>
  <!-- Bagian container -->

  <div style="padding:0 5rem; float:left; position:absolute; top: 301px;">
  <?php foreach($jobs as $job){
    if(isset($_GET["key"])){
      if(!str_contains(strtolower($job->job_name), strtolower($_GET["key"]))){
        continue;
      }
    }

  ?>
    <div style="float:left;width: 23rem; height: auto; margin-bottom : 20px; margin-right:20px; left: 523px; top: 301px; background: #FAFAF5; border-radius: 24px; overflow: hidden;" >
      <table >
        <tr>
          <td>
            <img style="width: 23rem; height:12rem; left: 0px; top: 0px; " src="images/banner.jpg" />
          </td>
        </tr>
        <tr>
          <td  style="padding:0 10px;">
            <div style="left: 24px; top: 320px;  color: black; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word"><?=$job->job_name?></div>
          </td>
        </tr>
        <tr>
          <td style="padding:0 10px;">
            <div style="left: 24px; top: 350px;  color: #426B1F; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word"><?=$job->type_name?></div>
          </td>
        </tr>
        <tr>
          <td  style="padding:0 10px;">
            <div style="left: 24px; top: 392px;  color: #6D6D6D; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word"><?=$job->description?></div>
          </td>
        </tr>
        <tr>
          <td style="padding:50px 20px; position:relative; ">
          <div <?php echo $job->status == "open" ? 'data-bs-toggle="modal" data-bs-target="#staticBackdrop" ' : "" ?> style="position:absolute; right:20px;padding-left: 23px; padding-right: 23px; padding-top: 13.50px; padding-bottom: 13.50px;  top: 32px; background: <?=$job->status=="open" ? "#426B1F" : "red"?>; border-radius: 8px; overflow: hidden; justify-content: center; align-items: center; display: inline-flex">
              <a  class="apply" <?php echo "onClick=".'"'."setId('".$job->job_id."')".'"' ?> style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 20.80px; word-wrap: break-word ; text-decoration:none;"  ><?=$job->status == "open" ? "Apply" : "Closed"?></a>
            </div>
          </td>
        </tr>
      </table>  
    </div>
    <?php } ?>
  </div>
 
</div>
<!-- Tombol add job -->
<div data-bs-toggle="modal" data-bs-target="#exampleModal" style="position:fixed;padding-left: 23px; padding-right: 23px; padding-top: 13.50px; padding-bottom: 13.50px;  bottom: 1rem; right : 1rem; background: #426B1F; border-radius: 15px; overflow: hidden; justify-content: center; align-items: center; display: inline-flex">
  <a style="text-align: center; color: white; font-size: 16px; font-family: Arial; font-weight: 600; line-height: 20.80px; word-wrap: break-word ; text-decoration:none;">Post Job</a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Posting Pekerjaan untuk pada job finder !</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Pengajuan job -->
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Pekerjaan</label>
          <input type="email" class="form-control" id="jobName" placeholder="Masukkan nama pekerjaan ">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
          <input type="email" class="form-control" id="jobDesc" placeholder="Deskripsikan seperti apa pekerjaanmu !">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tipe Pekerjaan</label>
          <select class="form-select" aria-label="Default select example" id="jobType"required>
            <option selected value = "" >Pilih tipe pekerjaan</option>
            <?php 
              foreach($job_type as $type){
                echo ' <option value = "'.$type->type_id.'" >'.$type->type_name.'</option>';
              }
            ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Recruitment Start</label>
          <input type="date" class="form-control" id="jobStart" placeholder="Deskripsikan seperti apa pekerjaanmu !">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Recruitment End</label>
          <input type="date" class="form-control" id="jobEnd" placeholder="Deskripsikan seperti apa pekerjaanmu !">
        </div>
        <!-- end -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="postJob">Posting</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajukan Permohonan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Pengajuan job -->
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama</label>
          <input type="text" class="form-control" id="jobName" placeholder="Masukkan nama anda ">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">No-HP</label>
          <input type="text" class="form-control" id="jobStart" placeholder="Masukkan No.Telp !">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">E-mail</label>
          <input type="text" class="form-control" id="jobEnd" placeholder="Cantumkan email">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <!-- end -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="ajukan">Ajukan</button>
      </div>
    </div>
  </div>
</div>

</body>


<script>
  let jobID = "";
  let key = "<?=(isset($_GET["key"])) ? $_GET["key"] : ""?>";
  let sort = "<?=(isset($_GET["sort"])) ? $_GET["sort"] : ""?>";
  let available = "<?=(isset($_GET["available"])) ? $_GET["available"] : ""?>";
  let searchBtn = document.getElementById("search");
  let searchIcon = document.getElementById("searchicon");
  let sortBtn = document.getElementById("sort");
  let defaultBtn = document.getElementById("default");
  let availableBtn = document.getElementById("available");
  let jobName = document.getElementById("jobName");
  let jobDesc = document.getElementById("jobDesc");
  let jobType = document.getElementById("jobType");
  let jobStart = document.getElementById("jobStart");
  let jobEnd = document.getElementById("jobEnd");
  let postBtn = document.getElementById("postJob");
  let ajukanBtn = document.getElementById("ajukan");
  let applyBtn = document.getElementsByClassName("apply");

  function setId(id){
    console.log(id);
    jobID = id;
  }

  search.addEventListener("keypress", (e)=>{
    if(event.key === "Enter"){
      console.log("ahh");
      window.location.href = "job?key=" + searchBtn.value;
    }
  });

  searchIcon.addEventListener('click',(e)=>{
    window.location.href = "job?key=" + searchBtn.value + (sort=="" ? "" : "&sort=" + sort);
  });

  sortBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    window.location.href = "job?" + (key != "" ? "key=" + key : "")  + (sort == "desc" || sort == "" ? "&sort=asc" : "&sort=desc") + (available != "" ? "&available=" + available : "");
  });

  defaultBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    window.location.href = "job?" + (key != "" ? "key=" + key : "") + (available != "" ? "&available=" + available : "");
  });

  availableBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    window.location.href = "job?" + (key != "" ? "key=" + key : "") + (sort != "" ? "&sort=" + sort : "")+(available == "false" || available == "" ? "&available=true" : "&available=false");
  });

  postBtn.addEventListener('click',(e)=>{
      console.log(jobName.value);
      console.log(jobDesc.value);
      console.log(jobType.value);
      console.log(jobStart.value);
      console.log(jobEnd.value);

      $.ajax({
            method : "POST",
            url: "job",
            data : {
                "jobName" : jobName.value ,
                "jobDesc" : jobDesc.value ,
                "jobStart" : jobStart.value ,
                "jobEnd" : jobEnd.value ,
                "jobType" : jobType.value
            },
            context: document.body
        }).done(function(e) {
            console.log(e);
            if(e["status"]=="sukses"){
                alert("Berhasil register");
                window.location.reload();
            }else{
                alert(e.message);
            }
        }).fail((e)=>{
            console.log("Error :" );
            console.log(e);
        });;
  });

  ajukanBtn.addEventListener('click',(e)=>{
    console.log("Hallo");
  });

  // applyBtn.addEventListener('click',(e)=>{
  //   e.preventDefault();
  // });

</script>
</html>
