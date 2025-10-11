<!DOCTYPE html>
<html>
<head>
  <title>Theme Preference (Light/Dark Mode)</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 100px;
      transition: background-color 0.5s, color 0.5s;
    }

    /* Light Mode */
    body.light {
      background-color: #ffffff;
      color: #000000;
    }

    /* Dark Mode */
    body.dark {
      background-color: #121212;
      color: #ffffff;
    }

    button {
      padding: 10px 20px;
      margin: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .light-btn {
      background-color: #f0f0f0;
      color: #000;
    }

    .dark-btn {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
  <h1>Theme Preference Demo</h1>
  <p>Click a button to change your theme preference.</p>

  <button class="light-btn" onclick="setTheme('light')">Light Mode</button>
  <button class="dark-btn" onclick="setTheme('dark')">Dark Mode</button>

  <script>
    // Function to set cookie
    function setCookie(name, value, days) {
      const d = new Date();
      d.setTime(d.getTime() + (days*24*60*60*1000));
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

    // Apply theme based on cookie
    function applyTheme() {
      const theme = getCookie("theme");
      if (theme === "dark") {
        document.body.className = "dark";
      } else {
        document.body.className = "light";
      }
    }

    // Set theme and save to cookie
    function setTheme(theme) {
      document.body.className = theme;
      setCookie("theme", theme, 7); // save for 7 days
    }

    // Apply saved theme on load
    window.onload = applyTheme;
  </script>
</body>
</html>