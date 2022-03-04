<?php 
$title = 'Menu';
require_once 'includes/header.php';
?>

<section class="menu" id="menu">

<h1 class="heading"> FTP <span>Servers</span> </h1>
<button class="btn" onclick="winscp()">WinSCP</button>
<button class="btn" onclick="ftp()">Filezilla</button>
<button class="btn" onclick="cyberduck()">Cyber Duck</button>


<div class="row">

    <div class="image">
        <img src="images/winscp.png" id="apache" alt="">
    </div>

    <div class="content">
        <div class="info">
            <h3 id=type> Apache HTTP Server Web Server</h3>
            <p id="type1">WinSCP is one of the most powerful and easy to use FTP client for Windows users. It feels like there are too many things on the user interface, but it is actually quite easy to learn.On your left, you have the files on your computer and on the right, you see the files on your server. Just click on a file to download, upload, or edit it.For advanced users, WinSCP has all the features that you would need from a powerful FTP client. It supports SFTP, SSH, and of course the plain old FTP. Handling files and assigning default editors is quite easy with WinSCP.</p>
            <h3> Compatibility</h3>
            <p id="compat">Windows</p>
        </div>
    </div>

</div>

<!-- aos js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- initializing aos  -->

<script>

    AOS.init({
        delay:400,
        duration:1000
    })

    function winscp() {
        document.getElementById("type").innerHTML = "WinSCP";
        document.getElementById("type1").innerHTML = "WinSCP is one of the most powerful and easy to use FTP client for Windows users. It feels like there are too many things on the user interface, but it is actually quite easy to learn.On your left, you have the files on your computer and on the right, you see the files on your server. Just click on a file to download, upload, or edit it.For advanced users, WinSCP has all the features that you would need from a powerful FTP client. It supports SFTP, SSH, and of course the plain old FTP. Handling files and assigning default editors is quite easy with WinSCP.";
        document.getElementById("compat").innerHTML = "Windows";
        document.getElementById('apache').src='images/winscp.png'
    }

    function ftp() {
        document.getElementById("type").innerHTML = "FTP";
        document.getElementById("type1").innerHTML = "is a fast and reliable FTP client with lots of handy features. It supports resume on both downloads and uploads, timeout detection, firewall support, SOCKS4/5 and HTTP1.1 support, SSL, SFTP and more, all with an intuitive drag and drop interface.";
        document.getElementById("compat").innerHTML = "Windows, Mac, and Linux";
        document.getElementById('apache').src='images/filezilla.jpg'
    }

    function cyberduck() {
        document.getElementById("type").innerHTML = "Cyber Duck";
        document.getElementById("type1").innerHTML = "CyberDuck is an extremely easy to use FTP client suitable for beginners as well as advanced users.It is available for Mac and Windows computers. Unlike other cross platform applications, it actually integrates beautifully with your native Mac environment. It also supports Mac features like storing your login credentials in keychain and locating files in finder.";
        document.getElementById("compat").innerHTML = "Windows, Mac";
        document.getElementById('apache').src='images/cyberduck.png'
    }

</script>

</section>
<?php require_once 'includes/footer.php'; ?>
