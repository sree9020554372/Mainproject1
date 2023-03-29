 $query=mysqli_query($conn, "SELECT tbl_reg.* 
              FROM tbl_reg 
              INNER JOIN tb_login ON tbl_reg.login_id = tb_login.username WHERE tb_login.username = 'a' ");