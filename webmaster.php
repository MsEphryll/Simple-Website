<?php include 'templates/header.php' ?>
  <style>
    #name {
    text-align: center;
    font-size: 30px;
    margin-top: 10px;
    padding: 15px;
  }

    h1, h4, strong, h5 {
      color: #0A1172;
    }
    
    strong {
      font-size: 15px;
      margin-left: 10px;
      font-weight: 1;
    }

    .schools {
      margin-left: 80px;
      font-size: 14px;
      margin-top: -21px;
    }

    .info p {
      font-size: 14px;
      padding: 1px;
      margin-top: 3px;
      margin-bottom: 3px;
    }

    hr {
      height: 2px;
      border: 2px solid #0A1172;
    }

    #personalInfo {
      font-size: 14px; 
      justify-content: space-between;
      padding: 10px; 
    }

    .address {
      margin-left: -300px;
      text-wrap: balance;
      text-align: center;
      padding: 10px;
    }

    .contact {
      text-wrap: balance;
      margin-left: 232px;
      margin-top: -95px;
      text-align: center;
      padding: 10px;
    }

    ul li {
      list-style: none;
      font-size: 14px;
      margin-left: 20px;
      padding: 1px;
      margin-top: 3px;
    }

   #skills li::before {
      content: "\2022";
      color: #0A1172;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }
  </style>

  


  <?php
  echo '<div id="name">
  <h1>April Bitang</h1>
</div>  

<div id="personalInfo">
  <div class="address">
    <p>San Isidro, Kitaotao</p>
    <p>Bukidnon, Philippines</p>
  </div>
  <div class="contact">
    <p>Mob.: 0991 578 8900</p>
    <p>Email: s.bitang.aprilrose@cmu.edu.ph</p>
  </div>
</div>

<div class="info">
  <h4>Personal Information</h4>
  <hr>
  <p><strong>Age:</strong> 19</p>
  <p><strong>Sex:</strong> Female</p>
  <p><strong>Birthday:</strong> April 30, 2004</p>
  <p><strong>Height:</strong> 164cm</p>
  <p><strong>Weight:</strong> 59kg</p>
  <p><strong>Education:</strong> 
    <div class="schools">
      <p>- San Isidro Elementary School</p>
      <p>- Kitaotao National High School</p>
      <p>- Kitaotao National High School</p>
      <p>- Central Mindanao University</p>
    </div>
  </p>
</div>

<div id="experience">
  <h4>Experiences</h4>
  <hr>
  <div>
    <ul>
      <li>-Content for this section is forthcoming</li>
    </ul>
  </div>

</div>

<div id="skills">
  <h4>Skills</h4>
  <hr>
  <p></p>
  <div>
    <h5>Programming Skills</h5>
    <ul>
      <li>
        Python
        <div class="progress">
          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 50%; ">50%</div>
        </div>
      </li>
      <li>
        Java
        <div class="progress">
          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 50%; ">50%</div>
      </li>
      <li>
        JavaScript
        <div class="progress">
          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 50%; ">50%</div>
      </li>
      <li>
        PHP
        <div class="progress">
          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 45%; ">45%</div>
      </li>
    </ul>
  </div>
</div>';
  ?>

<?php include 'templates/footer.php' ?>