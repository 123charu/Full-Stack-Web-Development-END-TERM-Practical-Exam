eno = $eno;
     $this-&gt;name = $name;
     $this-&gt;Mob = $Mob;
     $this-&gt;des = $des;
   }

   public function display data()
   {
     echo "Employee no is $eno <br />";
     echo "Employee name is $name <br />";
     echo "Employee salary is $Mob <br />";
     echo "Employee designation is $des <br />";
   }
}

$emp_info_array[] = new Employee();


for($i = 0; $i &lt; 5; $i++)
{
   $emp_info_array[$i] = new Employee();
   $emp_info_arrays[$i]-&gt;acceptData($enos[$i], $names[$i], $Mobile-no.[$i],$des[$i]);
 $emp_info_array[$i].displayData();
}
?&gt;