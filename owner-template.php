<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Demo Cabss</title>

    <style type="text/css">
        body{
            margin:0;
            background-color:#cccccc;
        }
        table{
            border-spacing:0;
        }
        td{
            padding:0;
        }
        img{
            border:0;
        }
        .wrapper{
            width:100%;
            table-layout:fixed;
            background-color: #cccccc;
            padding-bottom: 40px;
        }
        .main{
            margin: 0 auto;
            width: 100%;
            max-width:600px;
            background-color:#ffffff;
            border-spacing: 0;
            font-family:sans-serif;
        }

        @media (min-width: 600px) {}
    </style>
</head>
<body>
    <center class="wrapper">
        <h2 align="center">Demo Cabs </h2>
        <table class="main" align="center">
        <tr>
                <td style="background-color:#565656">
                    <table width="100%">
                        <tr>
                            <td style="padding:20px 20px; text-align:center; color:#ffffff;">
                                <h2 >New Booking Enquiry</h2>
                            </td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td style="padding:20px 20px; text-align:left; color:#000000;" >
                                <p>You received an order from {{name}}</p>  
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table >
                        <tr>
                            <td width="50%" style=" padding:2px 20px; text-align:left; color:#000000;" >
                                <p>Name</p>  
                            </td>
                            <td width="75%" style="padding:2px 20px; text-align:left; color:#000000;" >
                                <p>: {{name}}</p>  
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style=" padding:2px 20px; text-align:left; color:#000000;" >
                                <p>Email</p>  
                            </td>
                            <td width="75%" style="padding:2px 20px; text-align:left; color:#000000;" >
                                <p>: {{email}}</p>  
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style=" padding:2px 20px; text-align:left; color:#000000;" >
                                <p>Pickup Location</p>  
                            </td>
                            <td width="75%" style="padding:2px 20px; text-align:left; color:#000000;" >
                                <p>: {{location}}</p>  
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style=" padding:2px 20px; text-align:left; color:#000000;" >
                                <p>Destination</p>  
                            </td>
                            <td width="75%" style="padding:2px 20px; text-align:left; color:#000000;" >
                                <p>: {{destination}}</p>  
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style=" padding:2px 20px; text-align:left; color:#000000;" >
                                <p>Vehicle Type</p>  
                            </td>
                            <td width="75%" style="padding:2px 20px; text-align:left; color:#000000;" >
                                <p>: {{vehicle_type}}</p>  
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style="width:50%; padding:20px 20px; text-align:left; color:#000000;" >
                                <p>Phone</p>  
                            </td>
                            <td width="75%" style="padding:20px 20px; text-align:left; color:#000000;" >
                                <p>: {{phone}}</p>  
                            </td>
                        </tr>    
                    </table>
                </td>
            </tr>

        </table>
    </center>
</body>
</html>

