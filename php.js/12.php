<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <h1>javaScript</h1>

    <script>
       
       function a(input)
       {
          return input + 1;
       }

       document.write(a(6));
       prompt("비밀번호를 입력해주세요" + a(6));

    </script>

    <h1>php</h1>

    <?php
      function a($input)
      {

        return $input + 1;
      }

      echo a(5);
    ?>


    <script>
        a();
    </script>

</body>

</html>