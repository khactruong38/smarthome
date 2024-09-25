<html></html>
<head>
    <title>Smart Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1e272e;
            color: #fff;
        }
        .container {
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }
        .header .title {
            font-size: 24px;
        }
        .header .icons {
            display: flex;
            gap: 10px;
        }
        .header .icons i {
            font-size: 20px;
        }
        .status {
            display: flex;
            justify-content: space-around;
            padding: 20px 0;
        }
        .status .status-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #2f3640;
            padding: 10px;
            border-radius: 10px;
            width: 80px;
        }
        .status .status-item i {
            font-size: 24px;
            margin-bottom: 5px;
        }
        .rooms {
            padding: 20px 0;
        }
        .rooms .room-item {
            display: flex;
            align-items: center;
            background-color: #2f3640;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .rooms .room-item.active {
            background-color: #007bff;
        }
        .rooms .room-item i {
            font-size: 24px;
            margin-right: 10px;
        }
        .gauge {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            margin: 20px 0;
        }
        .gauge .circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 10px solid #2f3640;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .gauge .circle .percentage {
            font-size: 24px;
        }
        .gauge .circle .needle {
            width: 2px;
            height: 50px;
            background-color: #fff;
            position: absolute;
            bottom: 50%;
            transform-origin: bottom;
            transform: rotate(0deg);
        }
        .lights {
            padding: 20px 0;
        }
        .lights .light-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2f3640;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .lights .light-item .toggle {
            display: flex;
            align-items: center;
        }
        .lights .light-item .toggle input {
            margin-left: 10px;
        }
        .footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 0;
            background-color: #2f3640;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer .footer-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .footer .footer-item i {
            font-size: 24px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <div class="icons">
                <i class="fas fa-bars"></i>
            </div>
            <div class="title">Smart Home</div>
            <div class="icons">
                <i class="fas fa-plus"></i>
                
            </div>
        </div>
        <div class="status">
            <div class="status-item">
                <i class="fas fa-tint"></i>
                <div>75%</div>
            </div>
            <div class="status-item">
                <i class="fas fa-thermometer-half"></i>
                <div>27°C</div>
            </div>
            <div class="status-item">
                <i class="fas fa-bolt"></i>
                <div>55kWh</div>
            </div>
        </div>
        <div class="rooms">
            <div class="room-item active">
                <i class="fas fa-tv"></i>
                <div>Living Room<br>3 devices</div>
            </div>
            <div class="room-item">
                <i class="fas fa-bed"></i>
                <div>Bedroom<br>4 devices</div>
            </div>
            <div class="room-item">
                <i class="fas fa-utensils"></i>
                <div>Kitchen<br>2 devices</div>
            </div>
        </div>
        <div class="gauge">
            <div class="circle">
                <div class="percentage">0%</div>
                <div class="needle"></div>
            </div>
        </div>
        <div class="lights">
            <div class="light-item">
                <div>Overhead</div>
                <div class="toggle">
                    Off
                    <input type="checkbox">
                </div>
            </div>
            <div class="light-item">
                <div>Lamp</div>
                <div class="toggle">
                    On
                    <input type="checkbox" checked>
                </div>
            </div>
            <div class="light-item">
                <div>Pendant</div>
                <div class="toggle">
                    Off
                    <input type="checkbox">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-item">
            <i class="fas fa-home"></i>
            <div>Home</div>
        </div>
        <div class="footer-item">
            <i class="fas fa-chart-bar"></i>
            <div>Stats</div>
        </div>
        <div class="footer-item">
            <i class="fas fa-microphone"></i>
        </div>
        <div class="footer-item">
            <i class="fas fa-bell"></i>
            <div>Alerts</div>
        </div>
        <div class="footer-item">
            <i class="fas fa-cog"></i>
            <div>Settings</div>
        </div>
    </div>
</body>
</html>