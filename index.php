<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>callow.in</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        body {
            background: linear-gradient(145deg, #181b3a, #3c5e9c);
        }
        .instituteConteiner{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            padding-top: 30px;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .instituteConteiner > p {
            color: white;
            font-size: 19px;
            letter-spacing: 0.5px;
            font-family: 'Lato', sans-serif;
        }

        .wrapper {
            margin: 25px;
            width: 70%;
        }

        .select-btn,
        li {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-family: 'Lato', sans-serif;
        }

        .select-btn {
            height: 40px;
            width: 100%;
            padding: 0 10px;
            font-size: 18px;
            background: #fff;
            border-radius: 4px;
            justify-content: space-between;
            overflow: auto;
            white-space: nowrap;
        }
        

        .select-btn i {
            font-size: 25px;
            transition: transform 0.3s linear;
        }

        .wrapper.active .select-btn i {
            transform: rotate(-180deg);
        }

        .content {
            z-index: 1;
            display: none;
            padding: 15px;
            margin-top: 15px;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .wrapper.active .content {
            display: block;
        }

        .content .search {
            position: relative;
        }

        .search i {
            top: 50%;
            left: 15px;
            color: #999;
            font-size: 20px;
            pointer-events: none;
            transform: translateY(-50%);
            position: absolute;
        }

        .search input {
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 17px;
            border-radius: 5px;
            padding: 0 20px 0 43px;
            border: 1px solid #B3B3B3;
        }

        .search input:focus {
            padding-left: 42px;
            border: 2px solid rgb(121, 121, 121);
        }

        .search input::placeholder {
            color: #bfbfbf;
        }

        .content .options {
            margin-top: 10px;
            max-height: 250px;
            min-height: 20px;
            overflow-y: auto;
            padding-right: 7px;
        }

        .options::-webkit-scrollbar {
            width: 7px;
        }

        .options::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 25px;
        }

        .options::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 25px;
        }

        .options::-webkit-scrollbar-thumb:hover {
            background: #b3b3b3;
        }

        .options li {
            height: 50px;
            padding: 0 13px;
            font-size: 21px;
            overflow: auto;
            white-space: nowrap;
        }

        .options li:hover,
        li.selected {
            border-radius: 5px;
            background: #f2f2f2;
        }

        .grid-container {
            display: grid;
            grid-gap: 10px;
            grid-template-columns: auto auto;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            background: linear-gradient(145deg, #f0f0f0, #8e8e8e);
            box-shadow: 
                0.5px 0.5px 0.5px #c5c5c5,
                1px 1px 0.5px #c5c5c5,
                2px 2px 0.5px #c5c5c5,
                -0.5px -0.5px 0.5px #8a8a8a;
        }

        [data-notification-count] {
            position: relative;
        }

        /*[data-notification-count]::before {*/
        /*    content: "";*/
        /*    position: absolute;*/
        /*    top: 0.5em;*/
        /*    left: 0.5em;*/
        /*    width: 1.5em;*/
        /*    height: 1.5em;*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    border-radius: 20%;*/
        /*    background-color: var(--check-secondary, rgb(255, 0, 0));*/
        /*    color: white;*/
        /*}*/
    </style>
</head>

<body>
    


    <div class="instituteConteiner">
        <p>select your school name </p>
        <div class="wrapper">
            <div class="select-btn">
                <span> 
                    <?php 
                    if (isset($_COOKIE["instituteName"])) {
                        echo $_COOKIE["instituteName"]; 
                    }
                     else {
                        echo "institute Name";
                    }
                    ?></span>
                <i class="uil uil-angle-down"></i>
            </div>
            <div class="content">
                <div class="search">
                    <i class="uil uil-search"></i>
                    <input spellcheck="false" type="text" placeholder="Search">
                </div>
                <ul class="options"></ul>
            </div>
        </div>
    </div>

<div class="grid-container" style="margin-top:140px;">


    <a href="sainosoftech.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/sainosoftechcard.png" alt="sainosoftech" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="gripper.php">
        <div class="container" style="z-index: -1;" data-notification-count="5">
            <img src="productcard/grippercard.png" alt="cello gripper" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="doms neone eraser.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/doms neone erasercard.png" alt="doms neone eraser" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="domsscale15cm.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/domsscale15cmcard.png" alt="doms scale 15cm " style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    
    <a href="cello0.7lead.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/cello0.7lead.png" alt="cello 0.7 lead,callow" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="RUBIKS CUBE.php">
        <div class="container" style="z-index: -1;" data-notification-count="5">
            <img src="productcard/RUBIKSCUBECARD.png" alt="DOMS POLY COVER-WIRO NOTEBOOK 1 SUBJECT NOTEBOOK" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="cello correction pen.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/cello correction pen.png" alt="correction,callow" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="stickey notes.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/stickey notes.png" alt="stickey notes,callow" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="magenet.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/magenet.png" alt="magenet,callow" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="stapler pin.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/stapler pin.png" alt="stapler pin,callow" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="black-tape.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/black-tape.png" alt="black tape,callow" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="pentonic.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/pentoniccard.png" alt="pentonic pen,callow" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="scissor.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/scissorcard.png" alt="scissor" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="fevicol.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/fevicolcard.png" alt="fevicol" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="jkcopier.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/jkcopier.png" alt="jkcopier" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="m-seal.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/m-sealcard.png" alt="m-seal" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    
    <a href="DOMS SINGLE LINE NOTE BOOK LONG BOOK SPORTS CAR SERIES SET OF 3 160 PGS.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/DOMS SINGLE LINE NOTE BOOK (LONG BOOK) - SPORTS CAR SERIES (SET OF 3)(160 PGS)CARD.png" alt="DOMS SINGLE LINE NOTE BOOK (LONG BOOK) - SPORTS CAR SERIES (SET OF 3)(160 PGS)" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>
    
    <a href="DOMS PENCIL SHARPENERS BLISTER PACK OF 6.php">
        <div class="container" style="z-index: -1;"data-notification-count="5">
            <img src="productcard/DOMS PENCIL SHARPENERS (BLISTER PACK OF 6)CARD.png" alt="DOMS PENCIL SHARPENERS (BLISTER PACK OF 6)" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>

    <a href="DOMS 360.php">
        <div class="container" style="z-index: -1;" data-notification-count="5">
            <img src="productcard/DOMS 360CARD.png" alt="DOMS 360" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>

    <a href="tennisball.php">
        <div class="container" style="z-index: -1;" data-notification-count="5">
            <img src="productcard/tennisballcard.png" alt="tennis ball" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>

    <a href="DOMS ACADEMIA GEOMETRY BOX.php">
        <div class="container" style="z-index: -1;" data-notification-count="5">
            <img src="productcard/DOMS ACADEMIA GEOMETRY BOXCARD.png" alt="DOMS ACADEMIA GEOMETRY BOX" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>

    <a href="DOMS A1 HB PENCILS PACK OF 10.php">
        <div class="container" style="z-index: -1;" data-notification-count="5">
            <img src="productcard/DOMS A1 HB PENCILS PACK OF 10CARD.png" alt="DOMS A1 HB PENCILS PACK OF 10" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>

    <a href="DOMS COLOURED PENCIL 12 SHADES-HALF SIZE.php">
        <div class="container" style="z-index: -1;" data-notification-count="5">
            <img src="productcard/DOMS COLOURED PENCIL 12 SHADES-HALF SIZECARD.png" alt="DOMS COLOURED PENCIL 12 SHADES-HALF SIZE" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>

    <a href="DOMS SPORTS CAR ERASER.php">
        <div class="container" style="z-index: -1;" data-notification-count="5">
            <img src="productcard/DOMS SPORTS CAR ERASERCARD.png" alt="DOMS SPORTS CAR ERASER" style="width: 100%;-webkit-filter: drop-shadow(1px 1px 2px #222); filter: drop-shadow(1px 1px 2px #222);">
        </div>
    </a>

    


</div>
<div class="centerContent" style="margin-top:10px;">
    <button class="mediumButton" onclick="loadMore()">More</button>
</div>

<br> <br><br><br>

<?php include 'bottomnav.php'; ?>
<script>
  const wrapper = document.querySelector(".wrapper");
  const selectBtn = wrapper.querySelector(".select-btn");
  const searchInp = wrapper.querySelector("input");
  const options = wrapper.querySelector(".options");

  let countries = [
    "Sadbhavana school",
    "LPD",
    "Samarpan Techno School",
    "Kavi Shree Premanand school 83",
    "K.C Kothari",
    "nalanda school",
    "P.P Savani Chaitanya Vidya Sankul",
    "Ryan International School",
    "krishna school sankul",
    "આદર્શ સ્કૂલ ",
    "Jay Ambe",
    "Oxford English Higher Secondary School",
    "wonderful acadmy",
    "tapovan school",
    "Parth Knowledge Institute",
    "LPS Group of Education",
    "suman high school 2nd",
    "suman high school 18nd"
  ];

  function addCountry(selectedCountry) {
    options.innerHTML = "";
    countries.forEach(country => {
      let isSelected = country == selectedCountry ? "selected" : "";
      let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
      options.insertAdjacentHTML("beforeend", li);
    });
  }

  addCountry();

  function updateName(selectedLi) {
    searchInp.value = "";
    addCountry(selectedLi.innerText);
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;

    instituteName(selectedLi.innerText);
  }

  // generate cookie for institute name
  function instituteName(cookieValue) {
    const date = new Date();
    const timeInMicroSecond = 30 * 24 * 60 * 60 * 1000;
    date.setTime(date.getTime() + timeInMicroSecond);
    let expires = "expires=" + date.toUTCString();
    document.cookie = `instituteName=${cookieValue}; ${expires} ; path=/; samesite=Lax; secure=true`;
  }

  searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = countries
      .filter(data => {
        return data.toLowerCase().startsWith(searchWord);
      })
      .map(data => {
        let isSelected =
          data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
      })
      .join("");
    options.innerHTML = arr
      ? arr
      : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
  });

  selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));

  // colors for discount
  const containerDiscountColor = ["NONE", "NONE", "NONE"];
  const containers = document.querySelectorAll(".container");
  containers.forEach((container, index) => {
    container.style.setProperty("--check-secondary", containerDiscountColor[index]);
  });
</script>
<script>
const jsonfile_ink =["test.json", "test2.json", "test3.json"];

let currentIndex = 0;

function loadMore() {
  fetch(jsonfile_ink[currentIndex])
    .then(response => response.json())
    .then(data => {
      const gridContainer = document.querySelector('.grid-container');
      for (const productName in data) {
        const productHtml = data[productName];
        const div = document.createElement('div');
        div.innerHTML = productHtml;
        gridContainer.appendChild(div);
      }
      currentIndex++;
      if (currentIndex >= jsonfile_ink.length) {
        // Disable the button when there is no more data to load
        const button = document.querySelector('.mediumButton');
        button.disabled = true;
        button.style.display = 'none';
      }
    })
    .catch(error => console.error(error));
}


</script>


    <!-- <script>
        const wrapper = document.querySelector(".wrapper"),
            selectBtn = wrapper.querySelector(".select-btn"),
            searchInp = wrapper.querySelector("input"),
            options = wrapper.querySelector(".options");

        let countries = ["Sadbhavana school","Kavi Shree Premanand school 83","nalanda school","P.P Savani Chaitanya Vidya Sankul","Ryan International School","krishna school sankul","આદર્શ સ્કૂલ ","Jay Ambe", "Oxford English Higher Secondary School","Parth Knowledge Institute","LPS Group of Education","suman high school 2nd","suman high school 18nd"];
        
        function addCountry(selectedCountry) {
            options.innerHTML = "";
            countries.forEach(country => {
                let isSelected = country == selectedCountry ? "selected" : "";
                let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
                options.insertAdjacentHTML("beforeend", li);
            });
        }
        addCountry();

        function updateName(selectedLi) {
            searchInp.value = "";
            addCountry(selectedLi.innerText);
            wrapper.classList.remove("active");
            selectBtn.firstElementChild.innerText = selectedLi.innerText;
            
            instituteName(selectedLi.innerText)
        }

        // generet cookie for institute name
        function instituteName(cookieValue) {
            const date = new Date()
            const timeInMicroSecond = 30*24*60*60*1000
            date.setTime(date.getTime() + timeInMicroSecond);
            let expires = "expires="+ date.toUTCString();
            document.cookie =`instituteName=${cookieValue}; ${expires} ; path=/; samesite=Lax; secure=true`; 
        }

        searchInp.addEventListener("keyup", () => {
            let arr = [];
            let searchWord = searchInp.value.toLowerCase();
            arr = countries.filter(data => {
                return data.toLowerCase().startsWith(searchWord);
            }).map(data => {
                let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
                return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
            }).join("");
            options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
        });

        selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));


        // colors for discount
        const containerDiscountColor =["NONE", "NONE", "NONE"]
        const containers = document.querySelectorAll(".container");
        containers.forEach((container,index) => {
            container.style.setProperty("--check-secondary", containerDiscountColor[index]);
        });

    </script>
        add this script tag in your test.php file -->






    <!-- true push notification -->
    <script type="application/javascript" src="https://sdki.truepush.com/sdk/v2.0.4/app.js" async></script>
    <script>
    var truepush = window.truepush || [];
            
    truepush.push(function(){
        truepush.Init({
            id: "63c7c948a5c7b71a0a81b5ae"
        },function(error){
          if(error) console.error(error);
        })
    })
    </script>

</body>
</html>
