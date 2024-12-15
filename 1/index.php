<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ფაილის ატვირთვა</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .upload-container {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            text-align: center;
        }
        .upload-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        input[type="file"] {
            border: 2px solid silver;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 20px;
        }
        .submit-btn {
            background-color: black;
            color: white;
            padding: 12px 24px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: gray;
        }
    </style>
</head>
<body>

<div class="upload-container">
    <h2>ატვირთეთ სურათი</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file"  name="file">
        <button type="submit" name="submit" class="submit-btn">ატვირთვა</button>
    </form>
    </form>




</div>

</body>
</html>
