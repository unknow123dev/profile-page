<!DOCTYPE html>
<html lang='eng'>
<head>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
      transition: background-color 2s ease;
      background-color: rgba(0,0,0,1);
    }
    #enter_div {
      display: flex;
      align-items: center;
      justify-content: center;
      align-self: center;
      width: 40%;
      padding: 15px 0;
      background-color: #873aff;
      color: #fff;
      border-radius: 8px;
      background: linear-gradient(#20bde7, #286576) padding-box, linear-gradient(to bottom, #20bde7, #286576) border-box;
      border: 1px solid transparent;
      box-shadow: 0 0 31px #8b75ff2e;
      transition: .3s;
      cursor: pointer;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 9999;
      font-size: 24px;
      opacity: 0;
    }
    #enter_div.visible {
      opacity: 1;
    }
    #enter_div:hover {
      transform: translate(-50%, -50%) scale(0.95);
    }
    .banner {
      width: 100vw;
      height: 100vh;
      object-fit: cover;
      position: fixed;
      top: 0;
      left: 0;
      z-index: -1;
      display: none;
    }
    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      display: none;
    }
    .profile-box {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
    }
    .profile-header {
      color: white;
      font-size: 24px;
      margin-bottom: 20px;
    }
    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }
    .buttons-container {
      display: flex;
      justify-content: center;
    }
    .navbar-button {
      background-color: transparent;
      border: none;
      cursor: pointer;
      margin: 0 10px;
      transition: transform 0.3s ease;
    }
    .navbar-button:hover {
      transform: scale(1.1);
    }
    .navbar-button img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.7);
    }
    .navbar-button img:hover {
      box-shadow: 0 0 40px rgba(255, 255, 255, 0.9);
    }
    .leo {
      position: absolute;
      bottom: 10px;
      left: 10px;
      color: white;
      font-size: 12px;
    }
  </style>
  <?php
  #change this
  $name = "leo"; # your name
  $thumbnail = "https://cdn.discordapp.com/attachments/1195854448015192185/1234931743967019100/IMG_5962.jpg?ex=6632874f&is=663135cf&hm=7a2b4e469d844199db4e0d72325eefd55da2fb37b4e3112019ab67a78d41a0c3&"; # your tumb
  $banner = "https://cdn.discordapp.com/banners/1234420040464601108/a_89699a1b0c11773e6cebebc73a4eb27a.gif?size=480";
  # stop chaging here
  echo '<title>' . $name . 'page </title>';
?>
</head>

<body onclick="playRandomSound()">
  <div id="enter_div" class="jackpot-button">
    <h1>Click to enter</h1>
  </div>
  <audio id="background_audio" loop volume="0.2" style="display: none;">
    <source src="" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
  <img src="<?php echo $banner; ?>" class="banner">
  <div class="content">
    <div class="profile-box">
      <div class="profile-header"><?php echo $name ?>'s Profile</div>
      <img src="<?php echo $thumbnail; ?>" alt="<?php echo $name; ?>'s profile picture" class="profile-image">
      <div class="buttons-container">
        <a href="https://discord.com" class="navbar-link">
          <button class="navbar-button">
            <img src="data:image/jpeg;base64,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" alt="Discord">
          </button>
        </a>
        <a href="https://www.roblox.com" class="navbar-link">
          <button class="navbar-button">
            <img src="data:image/png;base64,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" alt="Roblox">
          </button>
        </a>
        <a href="https://github.com" class="navbar-link">
          <button class="navbar-button">
            <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="GitHub">
          </button>
        </a>
        <a href="https://www.youtube.com" class="navbar-link">
          <button class="navbar-button">
            <img src="data:image/png;base64,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" alt="YouTube">
          </button>
        </a>
      </div>
      </div>
    </div>
  </div>
  <div class="leo">Offered by <?php echo $name; ?> to <?php echo $name; ?></div>

  <script>
    var audio = document.getElementById("background_audio");
    var source = document.querySelector("audio source");
    var enterDiv = document.getElementById("enter_div");
    var contentDiv = document.querySelector(".content");
    var bannerImg = document.querySelector(".banner");
    var backgroundChanged = false;

    function playRandomSound() {
      var random = Math.floor(Math.random() * 4) + 1;
      source.src = "sounds/" + random + ".mp3";
      audio.load();
      audio.play();
      enterDiv.style.display = "none";
      enterDiv.classList.remove('visible');
      contentDiv.style.display = "block";
      bannerImg.style.display = "block";

      if (!backgroundChanged) {
        backgroundChanged = true;
        var opacity = 1;
        var interval = setInterval(function() {
          opacity -= 0.1;
          document.body.style.backgroundColor = "rgba(0,0,0," + opacity + ")";
          if (opacity <= 0) clearInterval(interval);
        }, 200);
      }
    }
    window.onload = function() {
      enterDiv.classList.add('visible');
    };
  </script>
</body>
</html>
