<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{!! URL::asset('assets/css/font-awesome.min.css') !!}">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <script src="{!! URL::asset('assets/js/vue.js') !!}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


  <style>
    body{
      margin:0px;
      padding:0px;
      font-family: Lato, sans-serif;
    }

    header{
      width:100%;
      height:60px;
      background-color:#52AEFB;
      box-sizing: border-box;
      position:relative;
    }

    header > * > .logo {
      height:34px;
      margin-top:13px;
      margin-left:26px;
    }

    header > .rightlinks{
      float:right;
      height:60px;
      width:60%;
      text-align:right;
      padding-top:20px;
      box-sizing: border-box;
      padding-right:26px;
    }

    header > * > a {
      height:20px;
      font-size:14px;
      color:white;
      text-decoration:none;
      float:right;
      margin-left:24px;
      cursor:pointer;
    }

    header > * > a.embezzle {
      border:2px solid white;
      padding:5px;
      padding-left:16px;
      padding-right:16px;
      border-radius:3px;
      margin-top:-7px;
    }

    footer{
      width:100%;
      height:auto;
      background-color:#ff6632;
      box-sizing: border-box;
      position:relative;
      min-height: 60px;
      color:white;
      display:inline-block;
    }

    footer > .leftcol{
      width:20%;
      text-align:right;
      float:left;
      min-height:100px;
      display:inline-block;
      padding-top:32px;
      color:white;
      font-size:14px;
    }

    footer > .leftcol > span{
      font-size:11px;
    }

    footer > .leftcol > a{
      color:white;
      width:100%;
      text-align:right;

    }

    footer > .leftcol > img{
      height:25px;

    }

    footer > .rightcol{
      width:20%;
      text-align:left;
      float:left;
      min-height:100px;
      padding-left:25px;
      box-sizing: border-box;
      display:inline-block;
      padding-top:30px;
      color:white;
      font-size:14px;
    }

    footer > .rightcol > a{
      color:white;
      margin-bottom:4px;
      width:100%;
      text-align:left;
      text-decoration: none;
      display:block;
    }

    a:hover{
      opacity:.6;
    }

    .nonhover:hover{
      opacity:1;
      cursor:default;
    }

    .nonhover > img{
      width:40px;
      height:40px;
      border-radius:100%;
      display:inline-block;
      float:left;
      margin-top:-10px;
      margin-right:10px;
    }

    section[name="main"]{
      width:100%;
      height:100vh;
      height:calc(100vh - 60px);
      background-size:cover;
      background-position:center center;
      display:inline-block;
    }

    header > .underlogo{
      position:absolute;
      left:88px;
      bottom:4px;
      color:white;
      font-size:11px;

    }

    section[name="main"] > * > h1{
      width:90%;
      margin-left:5%;
      font-size:40px;
      text-align:center;
      color:white;
      font-weight:100;
      font-family:"Oswald", Oswald, Lato-Thin, "Lato-Thin", "Lato", Lato, sans-serif;
      margin-top:30vh;
    }

    section[name="main"] > .overlay{
      width:100%;
      height:100vh;
      height: calc(100vh - 60px);
      display:inline-block;
      background-color: rgba(0,0,0,.4);
    }

    section[name="main"] > .overlay > a.getstarted{
      display:block;
      width:300px;
      height:60px;
      color:white;
      text-align:center;
      box-sizing: border-box;
      font-size:20px;
      padding-top:14px;
      cursor: pointer;
      margin-left:auto;
      margin-right:auto;
      text-decoration: none;
      background-color:#52AEFB;
      font-family:"Oswald", Oswald, Lato-Thin, "Lato-Thin", "Lato", Lato, sans-serif;
    }

    section[name="main"] > .overlay > form{
      width:400px;
      margin-left:auto;
      margin-right:auto;
      background-color:white;
      border-radius:6px;
      margin-top:175px;
    }

    section[name="main"] > .overlay > form > fieldset{
      width:100%;
      height:60px;
      border:none;
      border-bottom: 1px #ddd solid;
      display:inline-block;
      box-sizing: border-box;
      padding:0px;
      margin:0px;
    }

    section[name="main"] > .overlay > form > fieldset:last-of-type{
      border-bottom:none;
      height:40px;
    }

    section[name="main"] > .overlay > form > fieldset.half{
      width:50%;
      float:left;
    }

    section[name="main"] > .overlay > form > fieldset.half:nth-of-type(3){
      border-right: 1px #ddd solid;
    }

    section[name="main"] > .overlay > form > fieldset > h1{
      width:100%;
      font-size:11px;
      font-family:'Lato-Thin',Lato-Thin, Lato, sans-serif;
      color: #888;
      margin-left:10px;
    }

    section[name="main"] > .overlay > form > fieldset > input{
      width:100%;
      border:none;
      padding-left:10px;
      outline:none;
      height:16px;
      color:#bbb;
    }

    section[name="main"] > .overlay > form > fieldset > input[type="submit"]{
      width:100%;
      height:40px;
      border:none;
      background-color:#52AEFB;
      display:inline-block;
      box-sizing: border-box;
      padding:0px;
      margin:0px;
      color:white;
      font-size:16px;
      font-family:'Oswald','Lato';
    }

    section[name="main"] > .overlay > form > fieldset > input[type="submit"]:hover{
      opacity:.7;
      cursor:pointer;
    }

    section[name="main"] > .overlay > form > fieldset > input[type="submit"]{
      border-bottom-left-radius: 6px;
      border-bottom-right-radius: 6px;
    }


    section[name="prices"]{
      width:100%;
      height:150px;
      background-color: #ff6632;
      display:inline-block;
    }




    section[name="features"]{
      width:100%;
      height:150px;
      background-color: #333;
      display:inline-block;
    }

    section[name="features"] > h1{
      font-family:'Oswald','Lato';
      font-size:24px;
      text-align:center;
      color:white;
      width:90%;
      margin-left:5%;
      margin-right:5%;
      margin-top:10px;
      font-weight:300;
    }

    section[name="features"] > .features{
      width:70%;
      height:70px;
      margin-left:15%;
      margin-right:15%;
      color:white;
    }

    section[name="features"] > .features > .feature{
      width:33.333%;
      float:left;
      height:70px;
      text-align:center;
    }

    section[name="features"] > .features > .feature > h1{
      font-family:'Oswald','Lato';
      font-size:15px;
      text-align:center;
      color:white;
      width:90%;
      margin-left:5%;
      margin-right:5%;
    }

    section[name="features"] > .features > .feature > i{
      font-size:2em;
    }


    section[name="pricing"]{
      width:100%;
      height:200px;
      background-color: #888;
      display:inline-block;
    }

    section[name="pricing"] > h1{
      font-family:'Oswald','Lato';
      font-size:24px;
      text-align:center;
      color:white;
      width:90%;
      margin-left:5%;
      margin-right:5%;
      margin-top:10px;
      font-weight:300;
    }

    section[name="pricing"] > .features{
      width:70%;
      height:70px;
      margin-left:15%;
      margin-right:15%;
      color:white;
    }

    section[name="pricing"] > .features > .feature{
      width:33.333%;
      float:left;
      height:70px;
      text-align:center;
    }

    section[name="pricing"] > .features > .feature > h1{
      font-family:'Oswald','Lato';
      font-size:15px;
      text-align:center;
      color:white;
      width:90%;
      margin-left:5%;
      margin-right:5%;
    }

    section[name="pricing"] > .features > .feature > i{
      font-size:2em;
    }


    section[name="setup"]{
      width:100%;
      min-height:100vh;
      min-height:calc(100vh - 60px);
      position:relative;
      overflow:hidden;
    }

    section[name="setup"] > .overlay{
      width:100%;
      height:500vh;
      background-position: 0px 0px;
      background-size:16.6666%;
      position:absolute;
      top:0px;
      -webkit-animation: glideup 180s infinite;
      animation: glideup 180s infinite;
      left:0px;
      -webkit-animation-timing-function: linear; /* Chrome, Safari, Opera */
      animation-timing-function: linear;
      z-index:1;
    }

    section[name="setup"] > .main{
      width:58%;
      margin-left:5%;
      height:100vh;
      height:calc(100vh - 60px);
      background-color:white;
      display:inline-block;
      z-index:2;
      position:relative;
    }

    section[name="setup"] > .main > h1{
      font-size:36px;
      font-family:"Oswald","Lato",Lato;
      color:#ff6632;
      margin-top:3px;
      margin-left:10px;
      margin-bottom:4px;
    }

    section[name="setup"] > .main > h2{
      font-size:16px;
      font-family:"Lato",Lato;
      color:#888;
      margin-top:0px;
      margin-left:10px;
      width:95%;
    }

    section[name="setup"] > .main h3{
      font-size:13px;
      font-family:"Lato",Lato;
      color:#888;
      font-weight:400;
      margin-top:0px;
      margin-left:0px;
      width:95%;
    }

    section[name="setup"] > .main > form{
      padding-left:10px;
    }

    section[name="setup"] > .main > form > input[type="submit"]{
      padding:10px;
      padding-left:15px;
      padding-right:15px;
      background-color:#ff6632;
      color:white;
      font-family: "Oswald","Lato";
      font-size:18px;
      border:none;
      float:right;
      cursor:pointer;
      margin-right:20px;
      margin-top:0px;
    }

    section[name="setup"] > .main > form > input[type="submit"]:hover{
      opacity:.5;
    }

    section[name="setup"] > .main > form > .block {
      width:100%;
      height:50px;
    }

    section[name="setup"] > .main > form > .block > .typebloc{
      font-size:2em;
      color:#ccc;
      float:left;
    }

    section[name="setup"] > .main > form > .block:hover > .typebloc {
      color:#ff6632 !important;
    }



    section[name="setup"] > .main > form > .block > input{
      font-size:1em;
      color:#ccc;
      float:right;
      width:80%;
      width:calc(100% - 60px);
      border:none;
      margin-top:6px;
      padding-left:9px;
      outline:none;

    }

    section[name="external"]{
      width:100%;
      min-height:100vh;
      min-height:calc(100vh - 60px);
      position:relative;
      overflow:hidden;
    }

    section[name="external"] > .overlay{
      width:100%;
      height:500vh;
      background-position: 0px 0px;
      background-size:cover;
      position:absolute;
      top:0px;
      left:0px;
      z-index:1;
    }

    section[name="external"] > .main{
      width:58%;
      margin-left:5%;
      height:100vh;
      height:calc(100vh - 60px);
      background-color:white;
      display:inline-block;
      z-index:2;
      position:relative;
    }

    section[name="external"] > .main > h1{
      font-size:36px;
      font-family:"Oswald","Lato",Lato;
      color:#ff6632;
      margin-top:3px;
      margin-left:10px;
      margin-bottom:4px;
    }

    section[name="external"] > .main > h2{
      font-size:16px;
      font-family:"Lato",Lato;
      color:#888;
      margin-top:0px;
      margin-left:10px;
      width:95%;
    }

    section[name="external"] > .main > h2 > li{
      font-weight:200;
    }

    section[name="external"] > .main h3{
      font-size:13px;
      font-family:"Lato",Lato;
      color:#888;
      font-weight:400;
      margin-top:0px;
      margin-left:0px;
      width:95%;
    }

    section[name="external"] > .main > form{
      padding-left:10px;
    }

    section[name="external"] > .main > form > input[type="submit"]{
      padding:10px;
      padding-left:15px;
      padding-right:15px;
      background-color:#ff6632;
      color:white;
      font-family: "Oswald","Lato";
      font-size:18px;
      border:none;
      float:right;
      cursor:pointer;
      margin-right:20px;
      margin-top:0px;
    }

    section[name="external"] > .main > form > input[type="submit"]:hover{
      opacity:.5;
    }

    section[name="external"] > .main > form > .block {
      width:100%;
      height:50px;
    }

    section[name="external"] > .main > form > .block > .typebloc{
      font-size:2em;
      color:#ccc;
      float:left;
    }

    section[name="external"] > .main > form > .block:hover > .typebloc {
      color:#ff6632 !important;
    }



    section[name="external"] > .main > form > .block > input{
      font-size:1em;
      color:#ccc;
      float:right;
      width:80%;
      width:calc(100% - 60px);
      border:none;
      margin-top:6px;
      padding-left:9px;
      outline:none;

    }

    .clear{
      clear:both;
      width:100%;
    }

    .clear.m20{
      margin-top:20px;
    }


    @keyframes glideup {
      0%   {margin-top:0px;}
      100% {margin-top:-400vh;}
    }

    section[name="videometrics"]{
      min-height: calc(100vh - 410px);
      background-color:white;
      width:100%;
      display:inline-block;
    }

    section[name="videometrics"] > .leftbloc{
      float:left;
      height: calc(100vh - 410px);
      width: calc(100vh - 410px);
      background-color:#52AEFB;
    }

    section[name="videometrics"] > .leftbloc > h1 > i{
      font-size:6em;
      color:white;
      width:100%;
      text-align:center;
      margin-top:30px;
    }

    section[name="videometrics"] > .leftbloc > h1{
      width:90%;
      margin-left:5%;
      margin-right:5%;
      color:white;
      font-size:20px;
      font-family:"Oswald","Lato";
    }

    section[name="videometrics"] > .rightbloc{
      float:left;
      min-height: calc(100vh - 410px);
      width: calc(100% - 100vh + 410px);
      background-color:white;
    }

    section[name="videometrics"] > .rightbloc > form > h3{
      font-size:16px;
      color:#888;
    }

    section[name="videometrics"] > .rightbloc > form{
      padding-left:10px;
    }

    section[name="videometrics"] > .rightbloc > form > input[type="submit"]{
      padding:10px;
      padding-left:15px;
      padding-right:15px;
      background-color:#52AEFB;
      color:white;
      font-family: "Oswald","Lato";
      font-size:18px;
      border:none;
      float:right;
      cursor:pointer;
      margin-right:20px;
      margin-top:-15px;
    }

    section[name="videometrics"] > .rightbloc > form > input[type="submit"]:hover{
      opacity:.5;
    }

    section[name="videometrics"] > .rightbloc > form > .block {
      width:100%;
      height:50px;
    }

    section[name="videometrics"] > .rightbloc > form > .block > .typebloc{
      font-size:2em;
      color:#ccc;
      float:left;
    }

    section[name="videometrics"] > .rightbloc > form > .block:hover > .typebloc {
      color:#52AEFB !important;
    }



    section[name="videometrics"] > .rightbloc > form > .block > input{
      font-size:1em;
      color:#ccc;
      float:right;
      width:80%;
      width:calc(100% - 60px);
      border:none;
      margin-top:6px;
      padding-left:9px;
      outline:none;

    }

    section[name="featurecollege"]{
      width:100%;
      height:400px;
      background-position:center;
      background-size:cover;
      display:inline-block;
    }

    section[name="featurecollege"] h1{
      width:90%;
      margin-left:5%;
      margin-right:5%;
      color:white;
      font-family:"Oswald","Lato";
      font-size:60px;
      margin-top:55px;
      text-align:center;

    }


    section[name="featurecollege"] a.book{
      display:block;
      width:300px;
      height:60px;
      color:white;
      text-align:center;
      box-sizing: border-box;
      font-size:20px;
      padding-top:14px;
      cursor: pointer;
      margin-left:auto;
      margin-right:auto;
      text-decoration: none;
      background-color:#52AEFB;
      font-family:"Oswald", Oswald, Lato-Thin, "Lato-Thin", "Lato", Lato, sans-serif;
    }

      section[name="featurecollege"] a.book:hover{
        opacity:.8;

      }

      section[name="colleges"]{
        width:100%;
        height:400px;
        background-position:center;
        background-size:cover;
        display:inline-block;
      }

      section[name="colleges"] > .college{
        width:50%;
        height:400px;
        float:left;
        background-position:center;
        background-size:cover;
        display:inline-block;
      }

      section[name="colleges"] > .college  h1{
        width:90%;
        margin-left:5%;
        margin-right:5%;
        color:white;
        font-family:"Oswald","Lato";
        font-size:60px;
        margin-top:55px;
        text-align:center;

      }


      section[name="colleges"] > .college  a.book{
        display:block;
        width:300px;
        height:60px;
        color:white;
        text-align:center;
        box-sizing: border-box;
        font-size:20px;
        padding-top:14px;
        cursor: pointer;
        margin-left:auto;
        margin-right:auto;
        text-decoration: none;
        background-color:#52AEFB;
        font-family:"Oswald", Oswald, Lato-Thin, "Lato-Thin", "Lato", Lato, sans-serif;
      }

        section[name="colleges"] > .college  a.book:hover{
          opacity:.8;

        }

      section[name="bookcollege"]{
        width:100%;
        height:250px;
        background-position:center;
        background-size:cover;
        display:inline-block;
      }

      section[name="bookcollege"] > * > h1{
        width:90%;
        margin-left:5%;
        margin-right:5%;
        color:white;
        font-family:"Oswald","Lato";
        font-size:40px;
        margin-top:80px;
        text-align:center;

      }

      .overlay{
        width:100%;
        height:100%;
        background-color: rgba(0,0,0,.5);
        display:inline-block;
      }

      .bookingform{
        width:100%;
        height:auto;
        min-height:50vh;
        position: relative;
        display: inline-block;
      }

      .bookingform > .back{
        position:absolute;
        left:10px;
        top:10px;
        padding:5px;
        cursor:pointer;
        background-color:#ddd;
        font-family:'Lato';
        font-size:14px;
        color:white;
        border-radius:5px;
      }



      .bookingform > .fields{
        width:60%;
        margin-left:20%;
        margin-right:20%;
        height:auto;
        margin-top:20px;
      }

      .bookingform > .fields > .field{
        width:100%;
        border-bottom: 1px #ddd solid;
        padding-top:4px;
        padding-bottom:4px;
        display:inline-block;

      }

      .bookingform > .fields > .editfield{
        width:100%;
        border-bottom: 1px #ddd solid;
        padding-top:4px;
        padding-bottom:4px;
        display:inline-block;
      }

      .bookingform > .fields > .editfield > h1{
        font-family:"Oswald","Lato";
        color:#ff6632;
        font-size:20px;
        margin-top:0px;
        margin-bottom:0px;
      }

      .bookingform > .fields > .editfield > h2{
        font-family:"Lato";
        color:#888;
        font-size:14px;
        font-weight:300;
        margin-top:0px;
        margin-bottom:0px;
      }

      .bookingform > .fields > .editfield > input{
        width:80%;
        height:30px;
        border-radius:5px;
        outline:none;
        border:none;
        border-bottom:0px #ddd solid;
        font-size:16px;
        color:#888;
        padding:4px;
        float:left;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
      }

      .bookingform > .fields > .field > h1{
        font-family:"Lato";
        color:#ff6632;
        font-size:12px;
        margin-top:0px;
        margin-bottom:0px;
      }

      .bookingform > .fields > span{
        width:100%;
        color:#888;
        font-family: Lato;
        font-size:12px;

      }

      .bookingform > .fields > input[type="submit"]{
        width:100%;
        height:40px;
        margin-top:8px;
        cursor:pointer;
        background-color:#52AEFB;
        border-radius:5px;
        font-size:16px;
        color:white;
        font-family:"Oswald","Lato";
        text-align:center;
        border:none;
        outline:none;
      }

      .bookingform > .fields > .editfield > .next{
        position:relative;
        width:18%;
        float:left;
        height:30px;
        text-align:center;
        background-color:#52AEFB;
        font-family:'Lato';
        font-size:14px;
        color:white;
        padding-top:6px;
        border-top-right-radius:5px;
        border-bottom-right-radius:5px;
        cursor:pointer;
        box-sizing: border-box;
        margin-right:1%;
      }

      .none{
        width:100%;
        height:100vh;
        height: calc(100vh - 60px);
      }

      .none > h1 {
        margin-top:60px;
        width:90%;
        margin-left:5%;
        text-align:center;
        color: #ff6632;
        font-size:32px;
        font-family: "Oswald","Lato";
        margin-bottom:3px;
      }

      .none > h2 {
        margin-top:0px;
        width:90%;
        margin-left:5%;
        text-align:center;
        color: #888;
        font-size:15px;
        font-family: "Lato";
      }

      .upcoming {
        width:50%;
        float:left;
        height:250px;
        padding:0px;
        margin:0px;
        box-sizing: border-box;
        display:inline-block;
        background-color:white;
        border:2px #ddd solid;
        position:relative;
      }

      .upcoming > .prof{
        width:210px;
        margin:20px;
        height:210px;
        float:left;
        background-position: center center;
        background-size:cover;
      }

      .upcoming > .buffer{
        width:5px;
        margin:10px;
        height:210px;
        float:left;
        background-position: center center;
        background-size:cover;
      }

      .upcoming > .rest{
        width: 50%;
        width: calc(100% - 250px);
        float:left;
        box-sizing: border-box;
        padding-top:20px;
        height: 230px;
      }

      .upcoming > .rest > h1 > a{
        width:100%;
        font-size:24px;
        color:#52AEFb;
        font-family:"Lato";
        margin-top:0px;
        margin-bottom:0px;
        text-decoration: none;
      }

      .upcoming > .rest > h1{
        width:100%;
        font-size:24px;
        color:#52AEFb;
        font-family:"Lato";
        margin-top:0px;
        margin-bottom:0px;
        text-decoration: none;
      }

      .upcoming > .rest > h3{
        width:100%;
        font-size:14px;
        color:#888;
        font-family:"Lato";
        margin-top:0px;
        margin-bottom:0px;
        text-decoration: none;
      }

      .upcoming > .rest > h3 b{
        color:white;
        background-color:#ff6632;
        padding:4px;
      }

      .upcoming > .rest > .prospie{
        width:50%;
        font-size:14px;
        color:#888;
        font-family:"Lato";
        margin-top:0px;
        margin-bottom:0px;
        display:inline-block;
        text-decoration: none;
        float:left;
      }

      .upcoming > .rest > .prospie b{
        color:white;
        background-color:#ff6632;
        padding:4px;
      }

      .upcoming > .rest > .propose{
        width:50%;
        font-size:14px;
        color:#888;
        font-family:"Lato";
        margin-top:0px;
        display:inline-block;
        margin-bottom:0px;
        text-decoration: none;
        float:left;
        min-height: 100px;
        margin-top:-50px;
      }

      .upcoming > .rest > .propose > form{
        width:100%;
        padding:10px;
        box-sizing: border-box;
      }

      .upcoming > .rest > .propose > form > fieldset{
        width:100%;
        float:left;
        box-sizing: border-box;
        padding:0px;
        margin-bottom:6px;
        border:none;
      }

      .upcoming > .rest > .propose > form > fieldset > h1{
        font-size:12px;
        font-color:#888;
        margin-top:0px;
        margin-bottom:0px;
      }

      .upcoming > .rest > .propose > form > fieldset > select{
        height:20px;
        width:25%;
        float:left;
        margin-right:3%;
        color:#52AEFB;
        background-color:white;
        border:1px #52AEFB solid;
      }

      .upcoming > .rest > .propose > form  > input{
        height:20px;
        float:left;
        margin-right:3%;
        color:white;
        background-color:#52AEFB;
        border:none;
      }

      .upcoming > .rest > .propose > form > fieldset > select + select {
        width:18%;
      }


      .upcoming > .rest > .propose > form > fieldset > select + select + select{
        width:45%;
      }


      .upcoming > .rest > h2{
        width:100%;
        font-size:14px;
        color:#888;
        font-family:"Lato";
        margin-top:0px;
        margin-bottom:20px;
      }

      .upcoming > .rest > span{

        border-radius:4px;
        border:1px #bbb solid;
        color:#bbb;
        padding:6px;
        font-family:"Lato";
        font-size:15px;
      }

      .upcoming > .rest > .tag{

        border-radius:4px;
        border:1px #bbb solid;
        color:#bbb;
        padding:5px;
        font-family:"Lato";
        font-size:15px;
        width:90%;
      }

      .upcoming > .rest > .tag > p{
        margin-top:0px;
        font-size:12px;
        margin-bottom:0px;
      }


      .upcoming > .rest > .tag > p > img{

        width:30px;
        height: 30px;
        float:left;
        margin-right:5px;

      }

      .upcoming > .rest > .cancel{

        border-radius:4px;
        border:0px #bbb solid;
        color:#ff6632;
        cursor:pointer;
        padding:6px;
        font-family:"Lato";
        font-size:15px;
        position:absolute;
        bottom:30px;
        left:30px;
        background-color:white;
        opacity:.8;
      }

      .upcoming > .rest > p{

        color:#bbb;
        font-family:"Lato";
        font-size:13px;
        width:90%;
      }

      .tour {
        width:80%;
        margin-left:10%;
        margin-right:10%;
        float:left;
        padding:0px;
        margin-top:50px;
        box-sizing: border-box;
        display:inline-block;
        background-color:white;
        min-height: calc(100vh - 110px);
      }

      .tour > .prof{
        width:210px;
        margin:20px;
        height:210px;
        float:left;
        background-position: center center;
        background-size:cover;
      }

      .tour > .rest{
        width: 50%;
        width: calc(100% - 250px);
        float:left;
        box-sizing: border-box;
        padding-top:20px;
        height: 230px;
      }

      .tour > .rest > h1 {
        width:100%;
        font-size:24px;
        color:#52AEFb;
        font-family:"Lato";
        margin-top:0px;
        margin-bottom:0px;
        text-decoration: none;
      }

      .tour > .rest > h2{
        width:100%;
        font-size:14px;
        color:#888;
        font-family:"Lato";
        margin-top:0px;
        margin-bottom:20px;
      }

      .tour > .rest > span{

        border-radius:4px;
        border:1px #bbb solid;
        color:#bbb;
        padding:6px;
        font-family:"Lato";
        font-size:15px;

      }

      .tour > .rest > .cancel{

        border-radius:4px;
        border:0px #bbb solid;
        color:#ff6632;
        cursor:pointer;
        padding:6px;
        font-family:"Lato";
        font-size:15px;

      }

      .tour > .rest > p{

        color:#bbb;
        font-family:"Lato";
        font-size:13px;
        width:90%;
      }

      #delegation{
        width:100%;
        height:100px;
        background-color:#ff6632;
        color:white;
        display:inline-block;
      }

      #delegation > h1{
        width:90%;
        font-family:"Lato";
        font-weight:200;
        margin-top:27px;
        text-align:center;

        margin-left:5%;
        margin-right:5%;
        font-size:30px;
        color:white;
      }

      .info{
        width:100%;
        height:auto;
        padding-top:10px;
        padding-bottom:10px;
        background-color:white;
        border-top:5px #52AEFB solid;
      }

      .info > h1{
        width:90%;
        margin-left:5%;
        margin-right:5%;
        margin-top:5px;
        margin-bottom:0px;
        color:#52AEFB;
        font-family:"Lato";
        text-align:center;
      }

      .info > h2{
        width:80%;
        margin-left:10%;
        margin-right:10%;
        margin-top:5px;
        margin-bottom:0px;
        color:#888;
        font-family:"Lato";
        text-align:center;
        font-size:14px;
        font-weight:300;
      }
  </style>
  <meta id="token" name="token" value="{{ csrf_token() }}">
  <script>
  //Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
  </script>
</head>
