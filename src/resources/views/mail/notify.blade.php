<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title>Email Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        body {
            font-family: 'Rubik', sans-serif;
        }

        table {
            width: 100%;
        }
    </style>
</head>
<body>
<table cellpadding="0" cellspacing="0" align="left">
    <tr>
        <td>
            <table cellpadding="0" cellspacing="0" width="640" align="left">
                <tr>
                    <td><p style="margin-top: 3px; margin-bottom: 3px;"><strong>From:</strong> {{ $data['name'] }}</p>
                    </td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="640" align="left">
                <tr>
                    <td><p style="margin-top: 3px; margin-bottom: 3px;"><strong>E-mail:</strong> {{ $data['email'] }}
                        </p>
                    </td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="640" align="left">
                <tr>
                    <td><p style="margin-top: 3px; margin-bottom: 15px;">
                            <strong>Subject:</strong> {{ $data['subject'] }}</p></td>
                </tr>
            </table>
            <hr>
            <table cellpadding="0" cellspacing="0" width="640" align="left">
                <tr>
                    <td style="font-size: 20px;">
                        <p style="margin-top:5px;">
                            {{ $data['message'] }}
                        </p>
                    </td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" align="left" >
                <tr>
                    <td>
                        <h2 style="margin-top: 20px; margin-bottom:10px"><strong>Library</strong></h2>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

