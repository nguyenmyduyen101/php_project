<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin dasboard</title>
  <link rel="stylesheet" href="/views/admin_dashboard/styleAdmin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <title>atlassian</title>
          <path
            d="M7.93,11.24C7.74,11 7.38,10.94 7.13,11.13C7.06,11.19 7,11.26 6.96,11.34L2.06,21.15C1.91,21.44 2.03,21.79 2.32,21.94C2.4,22 2.5,22 2.59,22H9.41C9.63,22 9.84,21.88 9.94,21.68C11.41,18.63 10.5,14 7.93,11.24M11.53,2.31C9.05,6.14 8.76,11 10.77,15.09L14.06,21.68C14.17,21.88 14.37,22 14.59,22H21.41A0.59,0.59 0 0,0 22,21.41C22,21.32 22,21.23 21.94,21.15C21.94,21.15 12.76,2.77 12.5,2.31C12.39,2.04 12.06,1.92 11.78,2.06C11.67,2.11 11.58,2.2 11.53,2.31Z" />
        </svg>
        <span>Dashboard</span>
      </div>
      <ul>
        <li class="item mt-40">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>home</title>
            <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
          </svg>
          <span>Home</span>
        </li>
        </li>
        <li class="item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>Top Categories</title>
            <path
              d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
          </svg><span>Categories</span></li>
        <li class="item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>Your Oders</title>
            <path d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4C22,2.89 21.1,2 20,2Z" />
          </svg><span>Your Oders</span></li>
        <li class="item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>About Us</title>
            <path
              d="M13.5,8H12V13L16.28,15.54L17,14.33L13.5,12.25V8M13,3A9,9 0 0,0 4,12H1L4.96,16.03L9,12H6A7,7 0 0,1 13,5A7,7 0 0,1 20,12A7,7 0 0,1 13,19C11.07,19 9.32,18.21 8.06,16.94L6.64,18.36C8.27,20 10.5,21 13,21A9,9 0 0,0 22,12A9,9 0 0,0 13,3" />
          </svg><span>About Us</span></li>
          <li class="item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>Contact Us</title>
            <path
              d="M13.5,8H12V13L16.28,15.54L17,14.33L13.5,12.25V8M13,3A9,9 0 0,0 4,12H1L4.96,16.03L9,12H6A7,7 0 0,1 13,5A7,7 0 0,1 20,12A7,7 0 0,1 13,19C11.07,19 9.32,18.21 8.06,16.94L6.64,18.36C8.27,20 10.5,21 13,21A9,9 0 0,0 22,12A9,9 0 0,0 13,3" />
          </svg><span>Contact Us</span></li>
       
    </div>
    <div class="header">
      <div class="top">
        <div class="search-bar">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>magnify</title>
            <path
              d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
          </svg>
          <input type="text" size="60">
        </div>
        <div class="profile">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>bell-outline</title>
            <path
              d="M10 21H14C14 22.1 13.1 23 12 23S10 22.1 10 21M21 19V20H3V19L5 17V11C5 7.9 7 5.2 10 4.3V4C10 2.9 10.9 2 12 2S14 2.9 14 4V4.3C17 5.2 19 7.9 19 11V17L21 19M17 11C17 8.2 14.8 6 12 6S7 8.2 7 11V18H17V11Z" />
          </svg>

          <img class="avatar"
            src="/image/logo.png"
            alt="">

          <h1>Manito</h1>
        </div>
      </div>
      <div class="main">
        <div class="user-info">

          <img class="avatar"
            src="/image/logo.png"
            alt="">

          <span>
            <h1>Hi there,</h1>
            <h1 class="title">Manito</h1>
          </span>
        </div>
        <div class="button">
          <div class="btn">New</div>
          <div class="btn">Upload</div>
          <div class="btn">Share</div>

        </div>
      </div>
    </div>
    <div class="dashboard-container">

        <div class="dashboard-section" id="product-section">
            <img src="/image/Pizza1.jpg" alt="">
            <div class="dashboard-content">
                <h2>Product Management</h2>
                <!-- Include product management content here -->
            </div>
        </div>

        <div class="dashboard-section" id="category-section">
            <img src="/image/pizza2.jpg" alt="">
            <div class="dashboard-content">
                <h2>Category Management</h2>
                <!-- Include category management content here -->
            </div>
        </div>

        <div class="dashboard-section" id="order-section">
            <img src="/image/Pizza1.jpg" alt="">
            <div class="dashboard-content">
                <h2>Order Management</h2>
                <!-- Include order management content here -->
            </div>
        </div>
    </div>
  </div>

</body>

</html>