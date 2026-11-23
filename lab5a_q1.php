<!DOCTYPYE html>
<html lang="en">
    <head><title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nur Shahirah Binti Mohamad Nazim";
        $matric_no = "CI240091";
        $course = "Bachelor of Computer Science (Information Security) With Honours";
        $year_of_study = "3";
        $address = "5239 Kampung Padang, 13200 Kepala Batas, Penang";
    ?>
    <table>
        <tr>
            <td>Name :</td>
            <td><?php echo "$name"; ?></td>
        </tr>
         <tr>
            <td>Matric Number :</td>
            <td><?php echo "$matric_no"; ?></td>
        </tr>
         <tr>
            <td>Course :</td>
            <td><?php echo "$course"; ?></td>
        </tr>
         <tr>
            <td>Year of Study :</td>
            <td><?php echo "$year_of_study"; ?></td>
        </tr>
        <tr>
            <td>Address :</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>