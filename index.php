<?php
// hello.php
// S305: Introduction to Technology Infrastructure
// Indiana University

// Simple Hello World with an educational twist
echo "<h1>Hello, S305!</h1>";
echo "<p>Welcome to Introduction to Technology Infrastructure.</p>";

// Explain how this page actually reached the browser
echo "<h2>How this PHP page uses the Internet Model:</h2>";
echo "<ol>
    <li><strong>Application Layer:</strong> 
        Your browser (client) sent an HTTP request, and Apache + PHP processed it to return this page.
    </li>
    <li><strong>Transport Layer:</strong> 
        The request and response were carried over TCP, ensuring reliability and correct order.
    </li>
    <li><strong>Network Layer:</strong> 
        IP addressed both your computer and the server so data could find the right destination.
    </li>
    <li><strong>Data Link Layer:</strong> 
        Ethernet/Wi-Fi framed the data and handled local delivery across your LAN or access point.
    </li>
    <li><strong>Physical Layer:</strong> 
        Electrical signals, light pulses, or radio waves actually carried the bits across cables or air.
    </li>
</ol>";

echo "<p><em>This simple 'Hello' traveled through every layer of the Internet model before reaching your screen.</em></p>";
?>
