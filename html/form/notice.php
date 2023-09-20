<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/form/notice.css">
    <script src="/form/notice.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
  .container h1{
    width: 
  }
</style>
<body>
  <section class="container ">
     <h1>회원가입</h1>
      <div class="justify-content-end d-flex location">
          <span class="home">홈</span>
          <span>전체소개</span>
          <span>회원가입</span>
      </div>
    <form action="member.php" method="get" class="">
      <div class="">
        <label for="name" class="d-block">아이디: </label>
        <input type="text" placeholder="아이디" name="name" id="name" required >
      </div>
      <div class="">
        <label for="password">비밀번호: </label>
        <input type="password" name="password" id="password" required>
      </div>
      <div class="">
        <label for="password1">비밀번호 확인: </label>
        <input type="password"  id="password1" required>
      </div>
      <div class="">
        <input type="submit" value="회원가입">
      </div>
    </form>
  </section>  

    
</body>
</html>
