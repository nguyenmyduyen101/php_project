<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #dc3545; /* Đổi màu thành màu đỏ (#dc3545) */
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      margin: 0;
    }

    header .buttons {
      display: flex;
    }

    header .buttons button {
      padding: 8px 16px;
      border: none;
      cursor: pointer;
      color: #fff;
      background-color: #007bff;
    }

    header .buttons .list-button {
      margin-left: 50px; /* Khoảng cách giữa các nút */
    }
  </style>
</head>
<body>

  <header>
    <h1>Order Detail</h1>
    <div class="buttons">
      <button onclick="printOrder()">Print</button>
      <button class="list-button" onclick="showList()">List</button>
    </div>
  </header>

  <!-- Nội dung trang web -->

  <script>
    function printOrder() {
      // Xử lý khi nhấn nút Print
      console.log('Printing order...');
    }

    function showList() {
      // Xử lý khi nhấn nút List
      console.log('Showing list...');
    }
  </script>

</body>
</html>
