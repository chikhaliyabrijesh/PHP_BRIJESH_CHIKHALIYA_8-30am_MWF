<div class="container-fluid">
<div class="row">
<div class="col-md-12">
    <h3 class="bg-dark p-2 mt-2 text-white text-center w-25 mx-auto">SHOW BOOK</h3>
    <table class="table table-striped  table-borderless table-hover mt-3">

        <tr class="bg-dark">
            <th class="text-white" scope="col">bookid</th>
            <th class="text-white" scope="col">bookname</th>
            <th class="text-white" scope="col">category</th>
            <th class="text-white" scope="col">auther</th>
            <th class="text-white" scope="col">quantity</th>
            <th class="text-white" scope="col">price</th>
            <th class="text-white" scope="col">Action</th>    
        </tr>

        <tr>
            <td><?php echo $readdata[0]["bookid"];?></td>
            <td><?php echo $readdata[0]["bookname"];?></td>
            <td><?php echo $readdata[0]["categoryid"];?></td>
            <td><?php echo $readdata[0]["autherid"];?></td>
            <td><?php echo $readdata[0]["quantity"];?></td>
            <td><?php echo $readdata[0]["price"];?></td>
            <td>
                <a href="<?php echo "./editdata";?>?editdataid=<?php echo $readdata[0]["bookid"];?>"><button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil-square">&nbsp;Edit</i></button></a> 

                <a href="<?php echo "./managebook";?>?deleteid=<?php echo $row["bookid"];?>"><button type="button" class="btn btn-sm btn-danger text-white"><i class="bi bi-trash">&nbsp;Delete</i></button></a>
            </td>
        </tr>
     
    </table>
</div>   