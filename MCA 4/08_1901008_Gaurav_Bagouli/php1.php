eno = $this-&gt;nos = $nos;
     $this-&gt;name = $name;
     $this-&gt;mob_number = $mob_number;
     $this-&gt;des = $des;
   }

   public function display data()
   {
     echo "Employee no is $nos <br />";
     echo "Employee name is $name <br />";
     echo "Employee mobile-number is $mob_number <br />";
     echo "Employee designation is $des <br />";
   }
}

$emp_info_array[] = new Employee();


for($i = 0; $i &lt; 5; $i++)
{
   $emp_info_array[$i] = new Employee();
   $emp_info_arrays[$i]-&gt;acceptData($enos[$i], $names[$i], $salaries[$i],$des[$i]);
 $emp_info_array[$i].displayData();
}
?&gt;