            <div class="col-md-12">
                <table class="table table-striped  table-borderless table-hover mt-3">
        
                    <tr class="bg-dark">
                        <th class="text-white" scope="col">book_Id</th>
                        <th class="text-white" scope="col">bookname</th>
                        <th class="text-white" scope="col">category</th>
                        <th class="text-white" scope="col">auther</th>
                        <th class="text-white" scope="col">quantity</th>
                        <th class="text-white" scope="col">price</th>
                        <th class="text-white" scope="col">Action</th>    
                    </tr>

                    <?php
                    foreach($showbook as $row)
                    {
                    ?>

                    <tr>
                        <th scope="row"><?php echo $row["bookid"];?></th>
                        <td><?php echo $row["bookname"];?></td>
                        <td><?php echo $row["categoryid"];?></td>
                        <td><?php echo $row["autherid"];?></td>
                        <td><?php echo $row["quantity"];?></td>
                        <td><?php echo $row["price"];?></td>
                        <td>
                            <a href="<?php echo "./readdata";?>?readdataid=<?php echo $row["bookid"];?>"><button type="button" class="btn btn-sm btn-primary text-white"><i class="bi bi-eye">&nbsp;Read</i></button></a> 

                            <a href="<?php echo "./editdata";?>?editdataid=<?php echo $row["bookid"];?>"><button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil-square">&nbsp;Edit</i></button></a> 

                            <a href="<?php echo "./managebook";?>?deleteid=<?php echo $row["bookid"];?>"><button type="button" class="btn btn-sm btn-danger text-white"><i class="bi bi-trash">&nbsp;Delete</i></button></a>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>
                        
                </table>
            </div>