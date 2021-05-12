<?php
    ini_set('display_errors', '1');

    function getTableFromStudents($access){
        $conn = new mysqli($access[0], $access[1], $access[2], $access[3]);
        if ($conn->connect_error) { // test správnosti připojení
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->query("SET CHARACTER SET utf8");

        $sql = "SELECT * FROM Students"; // sestavení SQL dotazu 
        $result = $conn->query($sql); // odeslání dotazu na MySQL

        if ($result->num_rows > 0) {
            $return = "<table>";
            while($row = $result->fetch_assoc()) { // $row je associativní pole, které obsahuje data o jednom záznamu (studentovi) z výsledku dotazu SQL 
                $return .= "<tr><td>" . $row["idStudent"]. "</td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>". $row["birtDate"]. "</td><td>". $row["categoryStudy"]. "</td><td>". $row["class"]. "</td><td>". $row["classTeacherId"]. "</td></tr>"; // výpis do tabulky
            }
            $return .= "</table>";
        } else {
            $return = "0 results";
        }

        $conn->close();

        return $return;
    }

    function insertDataToStudents($access, $dataStudent){
        $conn = new mysqli($access[0], $access[1], $access[2], $access[3]);
        if ($conn->connect_error) { // test správnosti připojení
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->query("SET CHARACTER SET utf8");
        $sql = "INSERT INTO Students (firstName, lastName, birtDate,categoryStudy,class,classTeacherId)
        VALUES ('$dataStudent[0]','$dataStudent[1]','$dataStudent[2]','$dataStudent[3]','$dataStudent[4]','$dataStudent[5]')";
        $conn->query($sql);
        $conn->close();
    }

    function deleteDataFromStudents($access,$idStudent){
        $conn = new mysqli($access[0], $access[1], $access[2], $access[3]);
        if ($conn->connect_error) { // test správnosti připojení
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->query("SET CHARACTER SET utf8");
        $sql = "DELETE FROM Students WHERE idStudent='$idStudent'";
        
        $conn->query($sql);
        $conn->close();
    }

    function modifyDataFromStudents($access,$idStudent, $dataStudent){
        $conn = new mysqli($access[0], $access[1], $access[2], $access[3]);
        if ($conn->connect_error) { // test správnosti připojení
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->query("SET CHARACTER SET utf8");
        $sql = "UPDATE Students SET firstName='$dataStudent[0]', lastName='$dataStudent[1]', birtDate='$dataStudent[2]',categoryStudy='$dataStudent[3]',class='$dataStudent[4]',classTeacherId='$dataStudent[5]' WHERE idStudent='$idStudent';";
        $conn->query($sql);
        $conn->close();
    }

    
?>