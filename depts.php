        <?php
                                  include 'phpdb.php';
                                   mysql_select_db('authen');
                                   $query=mysql_query("select * from depts");
                                   while($row=  mysql_fetch_row($query))
                                   {
                                       echo "<option>".$row[0]."</option>";
                                   }

                                   ?>
                           
