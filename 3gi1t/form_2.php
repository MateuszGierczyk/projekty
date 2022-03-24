<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action = "./scripts/form_data_2.php" method = "post">
    <table>
        <tr>
            <td>
                <span style = "color:red;">*</span>Company:
            </td>
            <td>
                <input type = "text" name = "company">
            </td>
        </tr>
        <tr>
            <td>
            <span style = "color:red;">*</span>First Name:
            </td>
            <td>
                <input type = "text" name = "f_name">
            </td>
        </tr>
        <tr>
            <td>
            <span style = "color:red;">*</span>Last Name:
            </td>
            <td>
                <input type = "text" name = "l_name">
            </td>
        </tr>
        <tr>
            <td>
            <span style = "color:red;">*</span>Email Address:
            </td>
            <td>
                <input type = "text" name = "email">
            </td>
        </tr>
        <tr>
            <td>
            <span style = "color:red;">*</span>Title:
            </td>
            <td>
                <input type = "text" name = "title">
            </td>
        </tr>
        <tr>
            <td>
            <span style = "color:red;">*</span>Phone:
            </td>
            <td>
                <input type = "text" name = "phone">
            </td>
        </tr>
        <tr>
            <td>
             Cancel Registration:
            </td>
            <td>
                <input type = "checkbox" name = "reg">
            </td>
        </tr>
        <tr>
            <td>
            <span style = "color:red;">*</span>252 Training Session 2010:
            </td>
            <td>
                <select name = "date">
                <option value = "default">--Select a date--</option>
            </select>
            </td>
        </tr>
        <tr>
            <td style = "vertical-align:top;">
            <span style = "color:red;">*</span>Job Function:
            </td>
            <td>
                <input type = "radio" name = "job" value = "Campaign Management"> Campaign Management <br>
                <input type = "radio" name = "job" value = "CRM Administration"> CRM Administration<br>
                <input type = "radio" name = "job" value = "Email Deployment"> Email Deployment<br>
                <input type = "radio" name = "job" value = "Partner"> Partner<br>
                <input type = "radio" name = "job" value = "Employee"> Employee<br>
            </td>
        </tr>
        <tr>
            <td>
             Dietary Requirements:
            </td>
            <td>
                <input type = "text" name = "diet">
            </td>
        </tr>
        <tr>
            <td style = "vertical-align:top;">
             Expectations?:
            </td>
            <td>
            <textarea name="exp" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type = "submit" name = "submit" value = "Submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>