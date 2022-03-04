<?php 
$title = 'Menu';
require_once 'includes/header.php';
?>

<section class="menu" id="menu">

<h1 class="heading"> Web Servers <span>Servers</span> </h1>
<button class="btn active" onclick="apache()">Apache Web Server</button>
<button class="btn" onclick="iis()">Microsoft IIS</button>
<button class="btn" onclick="node()">Node.js</button>


<div class="row">

    <div class="image">
        <img src="images/apacheweb.png" id="apache" alt="">
    </div>

    <div class="content">
        <div class="info">
            <h3 id=type> Apache HTTP Server Web Server</h3>
            <p id="type1">Developed by the Apache Software Foundation, the Apache HTTP Web Server is one of the most popular Web Servers.It is a free and open-source cross-platform web server software that was released under the terms of Apache License 2.0.</p>
            <h3>Features </h3>
            <p id="feature">The key benefit of the Apache HTTP Web Server is that it tends to support almost all types of operating systems; be it Windows, Linux, Mac OS, Unix, FreeBSD and many more.</p>
            <h3> Compatibility</h3>
            <p id="compat">It can be easily installed on multiple platforms and function properly.Out of all the types of web servers available, the Apache HTTP servers are much more stable and easier in terms of functionality, especially the latest released versions which are capable of handling a distinguishingly greater number of client requests when compared to the other versions</p>
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

    function apache() {
        document.getElementById("type").innerHTML = "Apache HTTP Server Web Server";
        document.getElementById("type1").innerHTML = "Developed by the Apache Software Foundation, the Apache HTTP Web Server is one of the most popular Web Servers.It is a free and open-source cross-platform web server software that was released under the terms of Apache License 2.0.";
        document.getElementById("feature").innerHTML = "The key benefit of the Apache HTTP Web Server is that it tends to support almost all types of operating systems; be it Windows, Linux, Mac OS, Unix, FreeBSD and many more.";
        document.getElementById("compat").innerHTML = "It can be easily installed on multiple platforms and function properly.Out of all the types of web servers available, the Apache HTTP servers are much more stable and easier in terms of functionality, especially the latest released versions which are capable of handling a distinguishingly greater number of client requests when compared to the other versions.";
        document.getElementById('apache').src='images/apacheweb.png'
    }

    function iis() {
        document.getElementById("type").innerHTML = "Apache HTTP Server Web Server";
        document.getElementById("type1").innerHTML = "The Internet Information Services Web Server is an extensible Web Server by Microsoft which was created with the Windows NT family.It is because of this that Microsoft maintains this product and it works with each and every Windows Operating System Platform.";
        document.getElementById("feature").innerHTML = "Manage IIS and ASP.NET in one tool.View health and diagnostic information that includes the ability to view currently running requests in real time.Configure user and role authorization for websites and web applications.Connect to a web server, site, or application remotely using HTTP.";
        document.getElementById("compat").innerHTML = "The Internet Information Services Web Server supports the HTTP, HTTP/2, HTTPS, FTP, SMTP, and NNTP but unlike Apache is not open-source.";
        document.getElementById('apache').src='images/ms-iis.png'
    }

    function node() {
        document.getElementById("type").innerHTML = "Node.js";
        document.getElementById("type1").innerHTML = "Node.js is known for executing the JavaScript code outside of a browser. It is an open-source, cross-platform, JavaScript runtime environment and enables developers to use JavaScript for writing commands.";
        document.getElementById("feature").innerHTML = "Owing to the fact that it is built on Google Chrome’s V8 JavaScript Engine, it is very fast in code execution.Even though it is based on the Single-threaded model, the Node.js Web Server is highly scalable which gives it an upper hand over the other traditional Web Servers.Every client comes with a different set of requirements and it is based on these requirements that the Web Hosting companies decide which Web servers to opt for.";
        document.getElementById("compat").innerHTML = "Node. js is officially supported on Linux, macOS and Microsoft Windows 8.1 and Server 2012 (and later), with tier 2 support for SmartOS and IBM AIX and experimental support for FreeBSD. OpenBSD also works, and LTS versions available for IBM i (AS/400).";
        document.getElementById('apache').src='images/node-js.png'
    }

</script>

</section>
<?php require_once 'includes/footer.php'; ?>
