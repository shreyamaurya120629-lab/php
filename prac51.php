<!DOCTYPE html>
<html>
<head>
  <title>Cookie Expiry (Limited-Time Offer)</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 100px;
    }

    #offer {
      background-color: #ffeb3b;
      padding: 15px;
      border-radius: 10px;
      display: inline-block;
      font-size: 18px;
      color: #333;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>

  <h1>Welcome to Our Store!</h1>
  <div id="offer">🎉 Welcome! You get <b>10% off</b> (valid for 10 minutes).</div>

  <script>
    // Function to set cookie
    function setCookie(name, value, minutes) {
      const d = new Date();
      d.setTime(d.getTime() + (minutes*60*1000)); // minutes → milliseconds
      const expires = "expires=" + d.toUTCString();
      document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Function to get cookie
    function getCookie(name) {
      const cname = name + "=";
      const decodedCookie = decodeURIComponent(document.cookie);
      const ca = decodedCookie.split(';');
      for(let i = 0; i < ca.length; i++) {
        let c = ca[i].trim();
        if (c.indexOf(cname) === 0) {
          return c.substring(cname.length, c.length);
        }
      }
      return "";
    }

    // Check if offer cookie exists
    function checkOffer() {
      const offerCookie = getCookie("offerShown");

      if (offerCookie === "") {
        // Cookie does not exist → show offer and set 10-min expiry
        document.getElementById("offer").style.display = "block";
        setCookie("offerShown", "yes", 10); // 10 minutes validity
      } else {
        // Cookie exists → hide the offer
        document.getElementById("offer").style.display = "none";
      }
    }

    // Run on page load
    window.onload = checkOffer;
  </script>

</body>
</html>