<?php
class html_body{
	function make_body(){
	echo "<body>\n";
	echo "<form>\n";
	echo "<select name=\"XXXX\">\n";		
				
				$conn1 = mysqli_connect('/*host name*/', '/*dbuser*/', '/*userpwd*/');
				$res =  mysqli_query($conn1,"SHOW DATABASES");
				while ($row = mysqli_fetch_assoc($res)) {
					echo '<option value="'.$row['Database'].'">'.$row['Database'].'</option>';
				}		
				mysqli_close($conn1);
        $_session['TABLE_NAME']='aliens_abduction';
	echo "</select>\n";
	echo "</form>\n";
	echo '現在使用資料庫：'.$_session['TABLE_NAME'];
	echo "<hr/>\n";
		$conn2 = mysqli_connect('/*host name*/', '/*dbuser*/', '/*userpwd*/','information_schema')or die('Error MySQL connection');
		$query = "SELECT * FROM COLUMNS where TABLE_NAME =\"".$_session['TABLE_NAME']."\"";
		$data =  mysqli_query($conn2,$query);
	echo "<table style=\"width:100%\">\n";
	echo "<tr>\n";
		while ($row = mysqli_fetch_array($data)) {
			echo "<th>".$row['COLUMN_NAME']."</th>";
		}
		mysqli_close($conn2);
	echo "</tr>\n";
		$conn3 = mysqli_connect('/*host name*/', '/*dbuser*/', '/*userpwd*/','/*somedb*/')or die('Error MySQL connection');
		$query1 = "SELECT * FROM /*somedb*/";
		$data1 =  mysqli_query($conn3,$query1);
		while ($row = mysqli_fetch_array($data1)) {
			echo "<tr>\n<td>".$row['姓']."</td><td>".$row["名"]."</td><td>".$row["發生時間"]."</td><td>".$row["持續時間"]
			."</td><td>".$row["多少人"]."</td><td>".$row["外星人描述"]."</td><td>".$row["外星所作所為"]."</td><td>".$row["fang_spotted"]
			."</td><td>".$row["fang_spotted"]."</td><td>".$row["電子郵件"]."</td>\n</tr>\n";
		}
		mysqli_close($conn3);
		echo "<tr>\n";						
			$conn4 = mysqli_connect('/*host name*/', '/*dbuser*/', '/*userpwd*/','information_schema') or die('error mariadb connection');
			$sql = "SELECT COLUMN_NAME FROM COLUMNS where table_name = 'aliens_abduction' and TABLE_SCHEMA = 'aliendatabase'";//SELECT * FROM COLUMNS where TABLE_NAME =   //show columns from b
			$result = mysqli_query($conn4,$sql);
			while($row = mysqli_fetch_array($result))
			{
				echo "<td>".$row[0]."</td>";					
			}
			mysqli_close($conn4);
        $this -> 剩下頁尾 ();
    }

    public function 剩下頁尾()
    {
        echo <<<TAG
</tr>\n
</table>\n
<hr/>\n
</body>\n
</html>
TAG;
    }
}
