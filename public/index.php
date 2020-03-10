<html>
<head>
    <link rel="stylesheet" href="./css/main.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="./js/moment.min.js"></script>
    <script src="./js/main.js"></script>
</head>
<body>
<form name="frmChat" id="frmChat">
    <label for="chat-user"></label><input type="text" name="chat-userqwe" id="chat-user" placeholder="Введите свое имя" class="chat-input" required/>
    <div id="chat-box"></div>

    <label for="chat-message"></label><input type="text" name="chat-message" id="chat-message" placeholder="Сообщение..." class="chat-input chat-message"
                                             required/>
    <input type="submit" id="btnSend" name="send-chat-message" value="Отправить">
</form>
</body>
</html>
