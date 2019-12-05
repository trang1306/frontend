<!DOCTYPE html public >
<html>
<head>
    <title>Read XML File</title>
</head>
<body>
    <style>
        h3 {
            color: #d0552e;
        }
    </style>
    <!-- Read XML file -->
    <h3>Read XML file</h3>
    <table>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>
        <?php
            $xmldata = simplexml_load_file("employees.xml") or die("Failed to load");
            foreach($xmldata->children() as $empl) {  ?>
            <tr>
                <td><?php echo $empl->firstname . ", "; ?></td>
                <td><?php echo $empl->lastname . ", ";  ?></td>
                <td><?php echo $empl->designation . ", "; ?></td>
                <td><?php echo $empl->salary . "<br />"; ?></td>
            </tr>
        <?php
        }
        ?>   
    </table>
    <br />
    <!-- Read Json file -->
    <h3>Read Json file</h3>
    <?php
       $json = 
        '{
            "toppings": [
                {
                    "NAME": "Zane",
                    "AGE": 54,
                    "CITY": "Ha Noi",
                    "PINCODE": "123456"
                },
                {
                    "NAME": "Zane",
                    "AGE": 54,
                    "CITY": "Da Nang",
                    "PINCODE": "123456"
                },
                {
                    "NAME": "Zane",
                    "AGE": 54,
                    "CITY": "Ho Chi Minh City",
                    "PINCODE": "123456"
                }
            ]
        }';
        $toppings = new RecursiveIteratorIterator(
            new RecursiveArrayIterator(json_decode($json, TRUE)),
            RecursiveIteratorIterator::SELF_FIRST);
        
        foreach ($toppings as $key => $val) {
            if(is_array($val)) {
                echo "$key:\n";
            } else {
                echo "$key => $val\n";
            }
        }
    ?>
    <br />
    <!-- Read csv -->
    <h3>Read CSV</h3>
    <table>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
        </tr>
        <?php
            $file = file('name.csv');
            foreach($file as $line) {
                list($fname, $lname,$op) = explode(",",$line);?>
            <tr>
                <td><?php echo "$fname"; ?></td>
                <td><?php echo "$lname"; ?></td>
                <td><?php echo "$op"; ?></td>
            </tr>
        <?php
        }
        ?>   
    </table>
</body>
</html>
