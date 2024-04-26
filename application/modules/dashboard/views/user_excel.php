<?php
    header("Content-type: application/octet-stream");
    header("Content-disposition: attachment; filename=Data User.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>

<html>
    <head>
        <title> ::Data User:: </title>
        <style>
            .head {
                margin: 0;
                padding-top: -10px;
            }
        </style>
    </head>

    <body>
        <h1 align="center"> Data User </h1>

        <table border="1" cellspacing="0" cellpadding="2" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;text-align:center;height:30px;">No.</th>
                    <th style="width:5%;text-align:center;height:30px;">Name</th>
                    <th style="width:10%;text-align:center;height:30px;">Email</th>
                    <th style="width:20%;text-align:center;height:30px;">Address</th>
                    <th style="width:15%;text-align:center;height:30px;">NIK</th>
                    <th style="width:5%;text-align:center;height:30px;">Gender</th>
                    <th style="width:10%;text-align:center;height:30px;">Birthdate</th>
                </tr>
            </thead>

            <?php
                $no = 0;
                if($data_user->num_rows() > 0) {
                    foreach($data_user->result() as $item) {
                        $no++;
            ?>

            <tr align="center" style="font-size: 12px;">
                <td align="center"><?php echo $no; ?></td>
                <td align="center"><?php echo $item->name; ?></td>
                <td align="center"><?php echo $item->email; ?></td>
                <td align="center"><?php echo $item->address; ?></td>
                <td align="center"><?php echo $item->nik; ?></td>
                <td align="center"><?php echo $item->gender; ?></td>
                <td align=center> <?php echo "<div id='birthdate'></div> "; ?></td>
            </tr>

            <?php
                }
            }
            ?>

            </tbody>
        </table>
        <script type="text/javascript">
            let nikValue = <?php echo "$item->nik"; ?>;
            let birthDate = document.querySelector("#birthdate");

            const sixDigitNumber = nikValue.toString();

            let dateString = sixDigitNumber.substr(6, 6);

            const day = dateString.substr(0, 2);
            const month = dateString.substr(2, 2) - 1; // Month is 0-indexed in JavaScript Date object
            const year = dateString.substr(4, 4); // Assuming it represents year in YY format

            let monthNames = [
                "January", "February", "March", "April", "May", "June", "July",
                "August", "September", "October", "November", "December"
            ];

            if (year <= "24" && year >= "00") {
                var formattedYear = "20" + year;
            } else {
                var formattedYear = "19" + year;
            }
            const formattedDate = `${day} ${monthNames[month]} ${formattedYear}`;
            birthDate.innerHTML = formattedDate;
        </script>

    </body>
</html>