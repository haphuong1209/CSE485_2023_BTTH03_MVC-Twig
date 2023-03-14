<?php
    require 'vendor/autoload.php';
    require 'interfaces/EmailServerInterface.php';
    require 'class/MyEmailServer';
    require 'class/EmailSender.php';
    
    $emailServer = new MyEmailServer();
    $emailSender = new EmailSender($emailServer);
    $emailSender->send("haphuong12092002@gmail.com", "KiTuDu", "Diem danh 11/3", "Nguyễn Thị Hà Phương 62TH1 điểm danh");
?>